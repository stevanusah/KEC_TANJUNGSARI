 <!-- Modal Show Detail Layanan -->
 <div class="modal fade modal-md" id="showdetaillayanan{{$dpls->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabeldetail">Detail Layanan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               
            <div class="" style="align-content: center">
                <div id="accordion">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                          <center><button class="btn btn-info active" disabled data-toggle="collapse" data-target="#collapseOne{{$dpls->id}}" aria-expanded="true" aria-controls="collapseOne">
                           Alur Proses Produk Layanan {{$dpls->nama_layanan}}
                          </button></center>
                        </h5>
                      </div>
                  
                      <div id="collapseOne{{$dpls->id}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                          <img src="https://portal-skpd.sumedangkab.go.id/{{$dpls->alur_prosedur_image}}" alt="thumb">
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <br>
                        <h5 class="mb-0">
                          <center><button class="btn btn-info collapsed" data-toggle="collapse" data-target="#collapseTwo{{$dpls->id}}" aria-expanded="false" aria-controls="collapseTwo">
                            Detail Produk Layanan
                          </button></center>
                        </h5>
                        <br>
                      </div>
                      <div id="collapseTwo{{$dpls->id}}" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                          
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th>1</th>
                                    <td>Dasar Hukum</td>
                                    <td>{!!$dpls->dasar_hukum!!}</td>
                                  </tr>
                                  <tr>
                                    <th>2</th>
                                    <td>Persyaratan</td>
                                    <td>{!!$dpls->persyaratan!!}</td>
                                  </tr>
                                  <tr>
                                    <th>3</th>
                                    <td>Waktu Pelayanan</td>
                                    <td>{!!$dpls->waktu_pelayanan!!}</td>
                                  </tr>
                                  <tr>
                                    <th>4</th>
                                    <td>Biaya / Tarif</td>
                                    <td>{!!$dpls->biaya!!}</td>
                                  </tr>
                                  <tr>
                                    <th>5</th>
                                    <td>Produk Pelayanan</td>
                                    <td>{!!$dpls->produk_pelayanan!!}</td>
                                  </tr>
                                  <tr>
                                    <th>6</th>
                                    <td>Pengelola Pengaduan</td>
                                    <td>{!!$dpls->pengelola_pengaduan!!}</td>
                                  </tr>
                                  <tr>
                                    <th>7</th>
                                    <td>Sarana dan Prasarana dan atau fasilitas</td>
                                    <td>{!!$dpls->fasilitas!!}</td>
                                  </tr>
                                  <tr>
                                    <th>8</th>
                                    <td>Kompetensi Pelaksana</td>
                                    <td>{!!$dpls->kompetensi_pelaksana!!}</td>
                                  </tr>
                                  <tr>
                                    <th>9</th>
                                    <td>Pengawasan Internal</td>
                                    <td>{!!$dpls->pengawasan_internal!!}</td>
                                  </tr>
                                  <tr>
                                    <th>10</th>
                                    <td>Jumlah Pelaksana</td>
                                    <td>{!!$dpls->numberof_implementer!!}</td>
                                  </tr>
                                  <tr>
                                    <th>11</th>
                                    <td>Jaminan Pelayanan</td>
                                    <td>{!!$dpls->jaminan_pelayanan!!}</td>
                                  </tr>
                                  <tr>
                                    <th>12</th>
                                    <td>Jaminan keamanan dan keselamatan pelayanan</td>
                                    <td>{!!$dpls->jamainan_keamanan_keselamatan!!}</td>
                                  </tr>
                                  <tr>
                                    <th>13</th>
                                    <td>Evaluasi Kinerja Pelaksana</td>
                                    <td>{!!$dpls->evaluasi_kinerja!!}</td>
                                  </tr>
                                  
                                </tbody>
                              </table>

                        </div>
                      </div>
                    </div>
                  </div>
            </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
