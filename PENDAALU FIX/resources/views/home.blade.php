@extends('layouts.main')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fas fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Admin</h4>
            </div>
            <div class="card-body">
              {{ $totaladmin }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="fas fa-users"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Alumni</h4>
            </div>
            <div class="card-body">
              {{ $totalalumni }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-solid fa-clipboard-check"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Sudah Mengambil</h4>
            </div>
            <div class="card-body">
              {{ $mengambil }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="fas fa-solid fa-clipboard"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Belum Mengambil</h4>
            </div>
            <div class="card-body">
              {{ $belum }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection