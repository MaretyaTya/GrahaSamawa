<!-- MODAL DETAIL UNIT -->
<div class="modal fade" id="detailUnitModal" tabindex="-1" aria-labelledby="detailUnitModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="detailUnitModal">Detail Properti</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- <div>
                    <img src="{{ asset('storage/' . $unit->images->first()->image_path) }}" class="d-block w-100" style="border-radius: 10px; max-height: 300px; object-fit: cover;" alt="{{ $unit->nama_unit }}">
                </div> -->
                <div id="testCarouselDetail" class="carousel slide">
                    <div class="carousel-inner">
                        <!-- PENGAMBILAN DATA IMAGE BUAT SLIDESHOW DISINI -->
                        <div class="carousel-item active">
                            <img src="{{ asset('storage/' . $unit->images->first()->image_path) }}" class="d-block w-100" style="border-radius: 10px; max-height: 300px; object-fit: cover;" alt="{{ $unit->nama_unit }}">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/' . $unit->images->first()->image_path) }}" class="d-block w-100" style="border-radius: 10px; max-height: 300px; object-fit: cover;" alt="{{ $unit->nama_unit }}">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('storage/' . $unit->images->first()->image_path) }}" class="d-block w-100" style="border-radius: 10px; max-height: 300px; object-fit: cover;" alt="{{ $unit->nama_unit }}">
                        </div>           
                    </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#testCarouselDetail" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testCarouselDetail" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                <div class="row row-cols-2 mt-3">
                    <div class="col-12 col-md-6">
                        <h5 id="nama_unit" class="text-dark mb-4"> Nama Unit </h5>
                        <div class="row row-cols-3">
                            <div class="col-1 col-lg-1">
                                <i class="fa-solid fa-house"></i>
                            </div>
                            <div class="col-8 col-lg-8">
                                Harga Properti :
                            </div>
                            <div id="harga_properti" class="col-3 col-lg-3 value-kt d-flex justify-content-lg-end">
                                Rp {{ number_format(0, 0, ',', '.') }}
                            </div>
                            <hr style="width: 100%;">
                            <div class="col-1 col-lg-1">
                                <i class="fas fa-bed"></i>
                            </div>
                            <div class="col-8 col-lg-8">
                                Kamar Tidur :
                            </div>
                            <div id="kamar_tidur" class="col-3 col-lg-3 value-kt d-flex justify-content-lg-end">
                                0
                            </div>
                            <hr style="width: 100%;">
                            <div class="col-1 col-lg-1">
                                <i class="fas fa-bath"></i>
                            </div>
                            <div class="col-8 col-lg-8">
                                Kamar Mandi :
                            </div>
                            <div id="kamar_mandi" class="col-3 col-lg-3 value-km d-flex justify-content-lg-end">
                                0
                            </div>
                            <hr style="width: 100%;">
                            <div class="col-1 col-lg-1">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="col-8 col-lg-8">
                                Luas Bangunan :
                            </div>
                            <div id="luas_bangunan" class="col-3 col-lg-3 value-lb d-flex justify-content-lg-end">
                                0
                            </div>
                            <hr style="width: 100%;">
                            <div class="col-1 col-lg-1">
                                <i class="fas fa-maximize"></i>
                            </div>
                            <div class="col-8 col-lg-8">
                                Luas Tanah :
                            </div>
                            <div id="luas_tanah" class="col-3 col-lg-3 value-kt d-flex justify-content-lg-end">
                                0
                            </div>
                            <hr style="width: 100%;">
                            <div class="col-1 col-lg-1">
                                <i class="fas fa-car"></i>
                            </div>
                            <div class="col-8 col-lg-8">
                                Carport :
                            </div>
                            <div id="carport" class="col-3 col-lg-3 value-kt d-flex justify-content-lg-end">
                                0
                            </div>
                            <hr style="width: 100%;">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <h5 class="text-dark mb-4">Spesifikasi Unit</h5>
                        <p id="spesifikasi" class="text-break">0</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="https://wa.me/62895366481314" target="_blank" class="btn btn-primary" style="width: 50%;">Hubungi</a>
            </div>
        </div>
    </div>
</div>
