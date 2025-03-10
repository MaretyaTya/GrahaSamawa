<!-- MODAL TAMBAH DATA UNIT -->
<div class="modal fade" id="modalDataUnit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="dataUnitModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="dataUnitModal">Tambah Data Unit</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.units.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div>
                                <label for="gambarUnit" class="form-label">Pilih gambar unit (Maks. 10 gambar)</label>
                                <input type="file" name="images[]" multiple accept="image/*"
                                    class="form-control gambarUnit">
                                <div class="imagePerview mt-2 d-flex flex-wrap"></div>
                            </div>
                        </div>

                        <div class="col-md-12 mb-4">
                            <div class="form-floating">
                                <input type="text" id="nama_unit" name="nama_unit" class="form-control"
                                    placeholder="masukkan nama unit">
                                <label for="nama_unit" class="form-label">Nama Unit</label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="form-floating">
                                <input type="number" id="harga" name="harga" class="form-control"
                                    placeholder="Masukkan harga">
                                {{-- <input type="hidden" id="harga-" name="harga"> --}}
                                <label for="harga" class="form-label">Harga</label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="form-floating">
                                <input type="number" id="kamar_tidur" name="kamar_tidur" class="form-control"
                                    placeholder="masukkan kamar tidur">
                                <label for="kamar_tidur" class="form-label">Kamar Tidur (Jumlah)</label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="form-floating">
                                <input type="number" id="kamar_mandi" name="kamar_mandi" class="form-control"
                                    placeholder="masukkan kamar mandi">
                                <label for="kamar_mandi" class="form-label">Kamar Mandi (Jumlah)</label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="form-floating">
                                <input type="number" id="carport" name="carport" class="form-control"
                                    placeholder="masukkan carport">
                                <label for="carport" class="form-label">Carport (Jumlah)</label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="form-floating">
                                <input type="number" id="luas_bangunan" name="luas_bangunan" class="form-control"
                                    placeholder="masukkan lb">
                                <label for="luas_bangunan" class="form-label">Luas Bangunan
                                    (m&sup2;)</label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="form-floating">
                                <input type="number" id="luas_tanah" name="luas_tanah" class="form-control"
                                    placeholder="masukkan lt">
                                <label for="luas_tanah" class="form-label">Luas Tanah (m&sup2;)</label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="form-floating">
                                <textarea name="spesifikasi" class="form-control" id="spesifikasi" rows="3"></textarea>
                                <label for="spesifikasi" class="form-label">Spesifikasi Unit</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm" style="width: 150px;">Submit</button>
                    <button type="button" data-bs-dismiss="modal" class="btn btn-secondary btn-sm"
                        style="width: 150px;">Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Format Rupiah --}}
{{-- <script>
    // function formatRupiah(input) {
    //     console.log(input);
    //     let basic = input.value;
    //     let value = input.value.replace(/\D/g, ''); // Hanya ambil angka (hapus karakter selain angka)
    //     let formattedValue = new Intl.NumberFormat('id-ID').format(value); // Format ke Rupiah (tanpa simbol Rp)

    //     input.value = formattedValue; // Tampilkan angka yang sudah diformat
    //     document.getElementById('harga').value = formattedValue;
    // }

    const hargaFormat = document.getElementById('harga-format')
    const harga = document.getElementById('harga')

    hargaFormat.addEventListener('input', function(event) {
        let value = event.target.value;

        // Remove non-numeric characters except for commas and periods
        value = value.replace(/[^\d,]/g, '');

        // Format the value to IDR currency format
        const formattedValue = new Intl.NumberFormat('id-ID').format(
            value); // Format ke Rupiah (tanpa simbol Rp)
        harga.value = value;

        // Set the formatted value back to the input field
        hargaFormat.value = formattedValue;
    });
</script> --}}

<script src="{{ asset('js/script.js') }}"></script>
