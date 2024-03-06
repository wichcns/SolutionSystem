@extends('layouts.app')

@section('title', 'ผู้ใช้งานระบบ')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">แดชบอร์ด</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2 col-6">
                            <!-- small box -->
                            <a href="#" class="small-box-footer">
                                <div class="small-box bg-gradient-success">
                                    <div class="inner">
                                        <h3>0</h3>

                                        <p>เปิดเอกสาร</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-file-text"></i>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 col-6">
                            <!-- small box -->
                            <a href="#" class="small-box-footer">
                                <div class="small-box bg-gradient-success">
                                    <div class="inner">
                                        <h3>0</h3>
                                        <p>รอการอนุมัติ</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-thumbs-up"></i>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="col-md-2 col-6">
                            <!-- small box -->
                            <a href="#" class="small-box-footer">
                                <div class="small-box bg-gradient-success">
                                    <div class="inner">
                                        <h3>0</h3>

                                        <p>รับทราบดำเนินการ</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-file-text"></i>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <!-- ./col -->

                        <!-- ./col -->
                        <div class="col-md-2 col-6">
                            <!-- small box -->
                            <a href="#" class="small-box-footer">
                                <div class="small-box bg-gradient-success">
                                    <div class="inner">
                                        <h3>0</h3>

                                        <p>ตรวจสอบ</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-calendar-check"></i>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <!-- ./col -->
                        <div class="col-md-2 col-6">
                            <!-- small box -->
                            <a href="#" class="small-box-footer">
                                <div class="small-box bg-gradient-success">
                                    <div class="inner">
                                        <h3>0</h3>

                                        <p>สำเร็จ</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <!-- ./col -->
                        <div class="col-md-2 col-6">
                            <!-- small box -->
                            <a href="#" class="small-box-footer">
                                <div class="small-box bg-gradient-danger">
                                    <div class="inner">
                                        <h3>0</h3>

                                        <p>ยกเลิก</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-ban"></i>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <!-- ./col -->
                    </div>
                </div>
            </div>
            {{-- Table --}}
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header card-lightbluetable">
                            <h3 class="card-title text-danger">รายการข้อมูลเอกสารทั้งหมด</h3>
                        </div>

                        <div class="card-body table-responsive">
                            <table id="table" class="table table-sm text-center table-striped ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>รหัสพนักงาน</th>
                                        <th>ประเภทเอกสาร</th>
                                        <th>ชื่อ-นามสกุล</th>
                                        <th>แผนก</th>
                                        <th>ตำแหน่ง</th>
                                        <th>วันที่เปิดเอกสาร</th>
                                        <th>วันที่ดำเนินการ</th>
                                        <th>วันที่สำเร็จ</th>
                                        <th>สถานะ</th>
                                        <th>หมายเหตุ</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
