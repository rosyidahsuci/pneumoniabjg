@extends('layouts.master')
@section('content')

    <style type="text/css">
    .leaflet-tooltip.no-background{
        background: transparent;
        border:0;
        box-shadow: none;
        font-size:10px;
    }
    </style>
    <div id="app">
    <div class="main-wrapper">
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Peta Penyebaran Pneumonia Balita</h1>
          </div>
          <div class="section-body">
            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <div class="float-left">
                        <select class="form-control" id="selectMap">
                            <option value="" >Pilih Tahun</option>
                            <option value="1" href="{{route('home')}}" selected>2016</option>
                            {{-- <option value="2" href="{{route('peta2017')}}">2017</option>
                            <option value="3" href="{{route('peta2018')}}">2018</option>
                            {{-- <option value="4" href="{{route('peta2019')}}">2019</option> --}}
                        </select>
                      </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div id="map" style="height: 440px;"></div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

    <!-- javascript -->
        <!-- script untuk berpindah ke peta lain -->
        <script type="text/javascript">
            document.getElementById('selectMap').onchange = function() {
                window.location.href = this.children[this.selectedIndex].getAttribute('href');
            }
        </script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script type="text/javascript">
            var peta = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
              '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
              'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11'
          });
            var map = L.map('map', {
                center: [	-7.1524786, 111.8869293],
                zoom: 11.4,
                layers: [peta]
            });
            var api = 'http://127.0.0.1:8000/api/clustering2016';
            var dataCluster=[];
            var geojson=[];
            getData();
            function getColor(kluster){
                color="#3f48cc";
                if(kluster==1){
                    color="#00ff00";
                }
                else if(kluster==2){
                    color="#ffff00";
                }
                else if(kluster==3){
                    color="#ff0000";
                }
                return color;
            }
            // atur style
            function style(f) {
                var kecamatan=f.properties.kecamatan;
                result = dataCluster[kecamatan];
                console.log(result);
                return {
                    weight: 0.5,
                    opacity: 1,
                    color: 'white',
                    dashArray: '5',
                    fillOpacity: 0.8,
                    fillColor: getColor(result.cluster)
                };
            }
            function highlightFeature(e) {
              var layer = e.target;
              layer.setStyle({
                    weight: 0.5,
                    color: '#f00',
                    dashArray: '',
                    fillOpacity: 0.8
              });
              if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
                layer.bringToFront();
              }
            }
            
            // update info
          function resetHighlight(e) {
            var layer = e.target;
            layer.setStyle({
              weight: 0.5,
              opacity: 1,
              color: 'white',
              dashArray: '3',
              fillOpacity: 0.8,
            })
          }
            function onEachFeature(f, layer){
                layer.on({
                    mouseover: highlightFeature,
                    mouseout: resetHighlight
                });
                var kecamatan= f.properties.kecamatan;
                data = dataCluster[kecamatan];
                // console.log(data);
                // var popUp='<table>'+
            // 			'<tr>'+
            // 				'<td colspan="4"><h6>'+data.kecamatan+'</h6></td>'+
            // 			'</tr>'+
            // 			'</table>';
            // layer.bindPopup(popUp);
                layer.bindTooltip(f.properties['kecamatan'],{
                    permanent:true,
                    direction:"center",
                    className:"no-background"
                });
            }
            function getData(){
                $.ajax({
                    url: api,
                    dataType:'JSON',
                    success:function(data){
                        for(i=0;i<data.length;i++){
                            var data_cluster = data[i];
                            var kec = data_cluster.kecamatan;
                            dataCluster[kec]=data_cluster;
                            // console.log(data_cluster);
                        }      
                        
                        $.getJSON("{{asset('assets')}}/bojonegoro.geojson", function(data_coordinate){
                                for(i=0;i<31;i++){
                                    var kecamatan = data_coordinate.features[i].properties.kecamatan;
                                    console.log(kecamatan);
                                }
                                geojson[kecamatan]=L.geoJSON(data_coordinate,{
                                    onEachFeature: onEachFeature,
                                    style: style
                                }).addTo(map);
                        });
                        
                    }
                });
            }
             
        </script>
    </section>
  </div>

  @endsection
