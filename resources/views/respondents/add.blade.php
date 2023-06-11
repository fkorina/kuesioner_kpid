@extends('layouts.app')

@section('css_after')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel">

                <div class="x_content">
                    <form action="{{ route('respondent.index') }}" method="post" novalidate>
                        <span class="section">Personal Info</span>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nama<span
                                    class="required"></span></label>
                            <div class="col-md-6 col-sm-12">
                                <input class="form-control" data-validate-length-range="6" data-validate-words="2"
                                    name="name"  required="required" />
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Jenis Kelamin<span
                                    class="required"></span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" class='optional' name="occupation"
                                    data-validate-length-range="5,15" type="text" />
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nomor HP<span
                                    class="required"></span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" name="email" class='email' required="required"
                                    type="email" />
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Pekerjaan <span
                                    class="required"></span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="email" class='email' name="confirm_email"
                                    data-validate-linked='email' required='required' />
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Umur<span
                                    class="required"></span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="number" class='number' name="number"
                                    data-validate-minmax="10,100" required='required'>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Pendidikan Terakhir<span
                                    class="required"></span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" class='date' type="date" name="date"
                                    required='required'>
                            </div>
                        </div>
                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Penghasilan<span
                                    class="required"></span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" class='time' type="time" name="time"
                                    required='required'>
                            </div>
                        </div>

                        <div class="field item form-group">
                            <label class="col-form-label col-md-3 col-sm-3  label-align">Kota/Kabupaten<span
                                    class="required"></span></label>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-control" type="password" id="password1" name="password"
                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}"
                                    title="Minimum 8 Characters Including An Upper And Lower Case Letter, A Number And A Unique Character"
                                    required />

                                <span style="position: absolute;right:15px;top:7px;" onclick="hideshow()">
                                    <i id="slash" class="fa fa-eye-slash"></i>
                                    <i id="eye" class="fa fa-eye"></i>
                                </span>
                            </div>
                        </div>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection

@section('js_after')
@endsection
