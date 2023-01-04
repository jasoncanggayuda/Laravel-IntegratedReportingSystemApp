<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                        <title>Dashboard</title>
                    </head>
                    <body>
                    @role('Pegawai')
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Permintaan Service AC</h5>
                                <p class="card-text">Ajukan surat permintaan service AC jika bermasalah</p>
                                <a href="/form_complain" class="btn btn-primary">Add Request</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Permintaan Yang Diajukan</h5>
                                <p class="card-text">Daftar permintaan service AC yang diajukan</p>
                                <a href="pegawai/dashboard" class="btn btn-primary">Check</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endrole

                    @role('Supervisor')
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Validasi Permintaan Service AC</h5>
                                <p class="card-tex  t">Permintaan Service AC sedang menunggu proses validasi</p>
                                <a href="/supervisor/dashboard" class="btn btn-primary">Check</a>
                            </div>
                            </div>
                        </div>
                            <div class="col-sm-6">
                                <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Permintaan Yang Diajukan</h5>
                                    <p class="card-text">Daftar permintaan service AC yang diajukan</p>
                                    <a href="pegawai/dashboard" class="btn btn-primary">Check</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    @endrole

                    @role('Clerk-Maintenance')
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Permintaan Service AC</h5>
                                <p class="card-tex  t">Toko sedang membutuhkan service AC</p>
                                <a href="/cm/dashboard" class="btn btn-primary">Check</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">History</h5>
                                <p class="card-text">Daftar permintaan service AC yang telah dilakukan</p>
                                <a href="history" class="btn btn-primary">Check</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endrole

                    @role('Pengawas')
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Selesaikan Pekerjaan</h5>
                                <p class="card-tex  t">Tulis Laporan Pekerjaan</p>
                                <a href="/cm/progress" class="btn btn-primary">Check</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">History</h5>
                                <p class="card-text">Daftar permintaan service AC yang telah dilakukan</p>
                                <a href="history" class="btn btn-primary">Check</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endrole
                    </body>
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                    </html>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
