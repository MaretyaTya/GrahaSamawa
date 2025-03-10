<!-- MODAL DETAIL UNIT -->
<div class="modal fade" id="detailUnitModal" tabindex="-1" aria-labelledby="detailUnitModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg h-75">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="detailUnitModal">Detail Properti</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="carouselDetail" class="carousel slide">
                    <div class="carousel-inner" id="carousel-inner">
                    </div>

                    <!-- Tombol Navigasi -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselDetail"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselDetail"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="price-modal my-2">
                    <div id="nama_unit" class="text-dark tipe-harga">
                        Nama Unit
                    </div>
                    <div class="ms-2">
                        <div class="text-muted">
                            Harga Mulai
                        </div>
                        <div id="harga_properti" class="tipe-harga">
                            Rp {{ number_format(0, 0, ',', '.') }}
                        </div>
                    </div>
                </div>
                
                
                <div class="row row-cols-2 mt-3">
                    <div class="col-12 col-md-6">
                        <h5 class="text-dark mb-2">Detail Unit</h5>
                        <div class="row">
                            <div class="col-12 d-flex flex-row border-bottom border-2">
                                <div class="p-1">
                                    <svg fill="#000000" width="20px" height="20px" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M5 10C3.347656 10 2 11.347656 2 13L2 26.8125C3.296875 25.6875 4.9375 24.777344 7 24.0625L7 20C7 17.339844 11.542969 17 15.5 17C19.457031 17 24 17.339844 24 20L24 22C24.335938 21.996094 24.65625 22 25 22C25.34375 22 25.664063 21.996094 26 22L26 20C26 17.339844 30.542969 17 34.5 17C38.457031 17 43 17.339844 43 20L43 24.03125C45.058594 24.742188 46.691406 25.671875 48 26.8125L48 13C48 11.347656 46.652344 10 45 10 Z M 25 24C5.90625 24 -0.015625 27.53125 0 37L50 37C50.015625 27.46875 44.09375 24 25 24 Z M 0 39L0 50L7 50L7 46C7 44.5625 7.5625 44 9 44L41 44C42.4375 44 43 44.5625 43 46L43 50L50 50L50 39Z"/></svg>
                                </div>
                                <div class="p-2">
                                    Kamar Tidur :
                                </div>
                                <div class="ms-auto p-2" id="kamar_tidur">
                                    0
                                </div>
                            </div>
                            <div class="col-12 d-flex flex-row border-bottom border-2">
                                <div class="p-1">
                                    <svg fill="#000000" width="20px" height="20px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M32,384a95.4,95.4,0,0,0,32,71.09V496a16,16,0,0,0,16,16h32a16,16,0,0,0,16-16V480H384v16a16,16,0,0,0,16,16h32a16,16,0,0,0,16-16V455.09A95.4,95.4,0,0,0,480,384V336H32ZM496,256H80V69.25a21.26,21.26,0,0,1,36.28-15l19.27,19.26c-13.13,29.88-7.61,59.11,8.62,79.73l-.17.17A16,16,0,0,0,144,176l11.31,11.31a16,16,0,0,0,22.63,0L283.31,81.94a16,16,0,0,0,0-22.63L272,48a16,16,0,0,0-22.62,0l-.17.17c-20.62-16.23-49.83-21.75-79.73-8.62L150.22,20.28A69.25,69.25,0,0,0,32,69.25V256H16A16,16,0,0,0,0,272v16a16,16,0,0,0,16,16H496a16,16,0,0,0,16-16V272A16,16,0,0,0,496,256Z"/></svg>
                                </div>
                                <div class="p-2">
                                    Kamar Mandi :
                                </div>
                                <div class="ms-auto p-2" id="kamar_mandi">
                                    0
                                </div>
                            </div>
                            <div class="col-12 d-flex flex-row border-bottom border-2">
                                <div class="p-1">
                                    <svg fill="#000000" width="20px" height="20px" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M41 0L9 0C7.347656 0 6 1.347656 6 3L6 50L44 50L44 3C44 1.347656 42.652344 0 41 0 Z M 28 23L28 17L37 17L37 23 Z M 37 27L37 33L28 33L28 27 Z M 28 13L28 7L37 7L37 13 Z M 13 23L13 17L22 17L22 23 Z M 22 27L22 33L13 33L13 27 Z M 13 13L13 7L22 7L22 13 Z M 13 37L22 37L22 43L13 43 Z M 28 37L37 37L37 48L28 48Z"/></svg>
                                </div>
                                <div class="p-2">
                                    Luas Bangunan :
                                </div>
                                <div class="ms-auto p-2" id="luas_bangunan">
                                    0
                                </div>
                            </div>
                            <div class="col-12 d-flex flex-row border-bottom border-2">
                                <div class="p-1">
                                    <svg fill="#000000" width="20px" height="20px" viewBox="0 0 24 24" id="maximize-size" data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line"><path id="primary" d="M9,9,3.29,3.29M15,9l5.71-5.71M9,15,3.29,20.71m17.42,0L15,15" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path><path id="primary-2" data-name="primary" d="M3,8V4A1,1,0,0,1,4,3H8" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path><path id="primary-3" data-name="primary" d="M16,3h4a1,1,0,0,1,1,1V8" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path><path id="primary-4" data-name="primary" d="M8,21H4a1,1,0,0,1-1-1V16" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path><path id="primary-5" data-name="primary" d="M21,16v4a1,1,0,0,1-1,1H16" style="fill: none; stroke: rgb(0, 0, 0); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></svg>
                                </div>
                                <div class="p-2">
                                    Luas Tanah :
                                </div>
                                <div class="ms-auto p-2" id="luas_tanah">
                                    0
                                </div>
                            </div>
                            <div class="col-12 d-flex flex-row border-bottom border-2 mb-4">
                                <div class="p-1">
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2 14.803v6.447c0 .414.336.75.75.75h1.614a.75.75 0 0 0 .74-.627L5.5 19h13l.395 2.373a.75.75 0 0 0 .74.627h1.615a.75.75 0 0 0 .75-.75v-6.447a5.954 5.954 0 0 0-1-3.303l-.78-1.17a1.994 1.994 0 0 1-.178-.33h.994a.75.75 0 0 0 .671-.415l.25-.5A.75.75 0 0 0 21.287 8H19.6l-.31-1.546a2.5 2.5 0 0 0-1.885-1.944C15.943 4.17 14.141 4 12 4c-2.142 0-3.943.17-5.405.51a2.5 2.5 0 0 0-1.886 1.944L4.399 8H2.714a.75.75 0 0 0-.67 1.085l.25.5a.75.75 0 0 0 .67.415h.995a1.999 1.999 0 0 1-.178.33L3 11.5c-.652.978-1 2.127-1 3.303zm15.961-4.799a4 4 0 0 0 .34.997H5.699c.157-.315.271-.65.34-.997l.632-3.157a.5.5 0 0 1 .377-.39C8.346 6.157 10 6 12 6c2 0 3.654.156 4.952.458a.5.5 0 0 1 .378.389l.631 3.157zM5.5 16a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM20 14.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" fill="#000000"/></svg>
                                </div>
                                <div class="p-2">
                                    Carport :
                                </div>
                                <div class="ms-auto p-2" id="carport">
                                    0
                                </div>
                            </div>
                            <!-- <div class="col-1 col-lg-1">
                                <i class="fa-solid fa-house"></i>
                            </div>
                            <div class="col-8 col-lg-8">
                                Harga Properti :
                            </div>
                            <div id="harga_properti" class="col-3 value-kt d-flex justify-content-sm-end">
                                Rp {{ number_format(0, 0, ',', '.') }}
                            </div> -->
                            <!-- <div class="col-1 col-lg-1">
                                <i class="fas fa-bed"></i>
                            </div>
                            <div class="col-8 col-lg-8">
                                Kamar Tidur :
                            </div>
                            <div id="kamar_tidur" class="col-3 value-kt d-flex justify-content-end">
                                0
                            </div> -->
                            <!-- <hr style="width: 100%;">
                            <div class="col-1 col-lg-1">
                                <i class="fas fa-bath"></i>
                            </div>
                            <div class="col-8 col-lg-8">
                                Kamar Mandi :
                            </div>
                            <div id="kamar_mandi" class="col-3 value-km d-flex justify-content-end">
                                0
                            </div>
                            <hr style="width: 100%;">
                            <div class="col-1 col-lg-1">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="col-8 col-lg-8">
                                Luas Bangunan :
                            </div>
                            <div id="luas_bangunan" class="col-3 value-lb d-flex justify-content-end">
                                0
                            </div>
                            <hr style="width: 100%;">
                            <div class="col-1 col-lg-1">
                                <i class="fas fa-maximize"></i>
                            </div>
                            <div class="col-8 col-lg-8">
                                Luas Tanah :
                            </div>
                            <div id="luas_tanah" class="col-3 value-kt d-flex justify-content-end">
                                0
                            </div>
                            <hr style="width: 100%;">
                            <div class="col-1 col-lg-1">
                                <i class="fas fa-car"></i>
                            </div>
                            <div class="col-8 col-lg-8">
                                Carport :
                            </div>
                            <div id="carport" class="col-3 col-lg-3 value-kt d-flex justify-content-end">
                                0
                            </div>
                            <hr style="width: 100%;"> -->
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <h5 class="text-dark mb-2">Spesifikasi Unit</h5>
                        <p id="spesifikasi" class="text-break">0</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer bottom-0">
                <a href="https://wa.me/62895366481314" target="_blank" class="btn btn-primary"
                    style="width: 50%;">Hubungi</a>
            </div>
        </div>
    </div>
</div>
