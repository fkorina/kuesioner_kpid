@extends('layouts.app')

@section('css_after')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tambah Data Kuesioner</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>

                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: block;">
                    <br>
                    <form class="form-horizontal form-label-left" action="{{ route('questionnaire.store') }}"
                        method="post">
                        @csrf
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="question">Pertanyaan <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="question" required="required" class="form-control"
                                    value="{{ old('question') }}">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <a href="{{ route('questionnaire.index') }}" class="btn btn-primary">Kembali</a>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js_after')
@endsection
