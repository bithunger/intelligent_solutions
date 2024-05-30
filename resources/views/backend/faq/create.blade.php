@extends('backend.layout.master')
@php
    $pageTitle = 'Frequently Question';
@endphp
@section('content')
    <div class="page-heading">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="page-title">{{ $pageTitle ?? '' }}</h1>
            </div>
            <div class="col-sm-6 pt-4 text-right">
                <a href="{{ route('faq.index') }}" class="btn bg-danger text-white"><i class="fa fa-reply"></i> Back to
                    list</a>

            </div>
        </div>
    </div>
    <div class="page-content fade-in-up">
        <div class="ibox rounded">
            <div class="ibox-body">
                <div id="row">
                    <form method="post" action="{{ route('faq.store') }}" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-gradient-info text-white">
                                        <h5 class="card-title">Add New </h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="question">Title <strong class="text-danger">*</strong></label>
                                            <input type="text" name="question" id="question" class="form-control"
                                                placeholder="Enter your question" required>
                                            @error('question')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="answer">Answer <strong class="text-danger">*</strong></label>
                                            <textarea name="answer" id="answer" rows="10" class="form-control editor" placeholder="Enter your answer"
                                                required>{{ old('answer') }}</textarea>
                                            @error('answer')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-group text-center mt-3">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-plus-circle"></i> Create
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/backend/vendors/dropify-master/dist/css/dropify.min.css') }}">
    <link href="{{ asset('assets/backend/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/backend/vendors/summernote/dist/summernote-bs4.css') }}" rel="stylesheet" />
@endpush
@push('js')
    <script src="{{ asset('assets/backend/vendors/dropify-master/dist/js/dropify.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendors/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendors/summernote/dist/summernote-bs4.min.js') }}"></script>
@endpush
@push('customJS')
    <script type="text/javascript">
        $('.dropify').dropify();
        $('.select2').select2();
        $('.editor').summernote({
            height: 250,
            callbacks: {
                // callback for pasting text only (no formatting)
                onPaste: function(e) {
                    var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData(
                        'Text');
                    e.preventDefault();
                    bufferText = bufferText.replace(/\r?\n/g, '<br>');
                    document.execCommand('insertHtml', false, bufferText);
                }
            }
        });
    </script>
@endpush
