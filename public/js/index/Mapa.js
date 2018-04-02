function initMap() {
                    var jalisco = {lat: 20.659699, lng: -103.349609};
                    var nuevoleon = {lat: 25.592172, lng: -99.996195};
                    var cdmexico = {lat: 19.432608, lng: -99.133208};

                    var textojalisco = '<div style="color:#080808;"> <p> <u> Innova-center VG Jalisco </u> </p>  </div>';

                    var textonuevoleon = '<div style="color:#080808;"> <p> <u> Innova-center VG Nuevo leon </u> </p>  </div>';

                    var textocdmexico = '<div style="color:#080808;"> <p> <u> Innova-center VG Cd de Mexico </u> </p>  </div>';

                    var infowindow = new google.maps.InfoWindow({
                        content: textojalisco
                    });

                    var infowindowNuevoleon = new google.maps.InfoWindow({
                        content: textonuevoleon
                    });

                    var infowindowcdmexico = new google.maps.InfoWindow({
                        content: textocdmexico
                    });

                    var map = new google.maps.Map(document.getElementById('map'), {
                      zoom: 5,
                      center: jalisco,
                      label:'Jalisco'
                    });

                    var marker = new google.maps.Marker({
                      position: jalisco,
                      map: map,
                      title: 'Jalisco',
                      animation: google.maps.Animation.DROP
                    });

                    var marker2 = new google.maps.Marker({
                      position: nuevoleon,
                      map: map,
                      title: 'Nuevo leon',
                      animation: google.maps.Animation.DROP
                    });

                    var marker3 = new google.maps.Marker({
                      position: cdmexico,
                      map: map,
                      title: 'Cd. Mexico',
                      animation: google.maps.Animation.DROP
                    });
                    //
                    // map.addListener('center_changed', function() {
                    //   // 3 seconds after the center of the map has changed, pan back to the
                    //   // marker.
                    //   window.setTimeout(function() {
                    //     map.panTo(marker.getPosition());
                    //   }, 3000);
                    // });

                    marker.addListener('mouseover', function() {
                      map.setZoom(6);
                      map.setCenter(marker.getPosition());

                      $('#cabecera').html('Jalisco');
                      $('#contactopersona').html('Contacto');
                      $('#escribir').html('Lic.Eduardo Gonzalez');
                      $('#telefono').html('<b>Telefono:</b> <u> 3310153121 </u>');

                       infowindow.open(map, marker);
                       $('#cabecera').animate({
                          'margin-left':'50px'
                        },1500);

                      $('#contactopersona').animate({
                         'margin-left':'50px'
                       },1500);

                      $('#escribir').animate({
                        'margin-left':'50px'
                      },1500);

                      $('#telefono').animate({
                        'margin-left':'50px'
                      },1500);

                    });

                    marker.addListener('mouseout', function() {
                        map.setZoom(5);
                        infowindow.close();
                      });

                    marker2.addListener('mouseover', function() {
                       map.setZoom(6);
                      map.setCenter(marker2.getPosition());

                      $('#cabecera').html('Nuevo leon');
                      $('#contactopersona').html('Contacto');
                      $('#escribir').html('Lic.Eduardo Gonzalez');
                      $('#telefono').html('<b>Telefono:</b> <u> 3310153121 </u>');

                       infowindowNuevoleon.open(map, marker2);
                       $('#cabecera').animate({
                          'margin-left':'50px'
                        },1500);

                      $('#contactopersona').animate({
                         'margin-left':'50px'
                       },1500);

                      $('#escribir').animate({
                        'margin-left':'50px'
                      },1500);

                      $('#telefono').animate({
                        'margin-left':'50px'
                      },1500);

                    });

                    marker2.addListener('mouseout', function() {
                        map.setZoom(5);
                        infowindowNuevoleon.close();
                      });

                    marker3.addListener('mouseover', function() {
                      map.setZoom(6);
                      map.setCenter(marker3.getPosition());

                      $('#cabecera').html('Cd. Mexico');
                      $('#contactopersona').html('Contacto');
                      $('#escribir').html('Lic.Eduardo Gonzalez');
                      $('#telefono').html('<b>Telefono:</b> <u> 3310153121 </u>');

                       infowindowcdmexico.open(map, marker3);
                       $('#cabecera').animate({
                          'margin-left':'50px'
                        },1500);

                      $('#contactopersona').animate({
                         'margin-left':'50px'
                       },1500);

                      $('#escribir').animate({
                        'margin-left':'50px'
                      },1500);

                      $('#telefono').animate({
                        'margin-left':'50px'
                      },1500);

                    });

                    marker3.addListener('mouseout', function() {
                        map.setZoom(5);
                        infowindowcdmexico.close();
                      });

                  }