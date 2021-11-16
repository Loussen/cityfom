@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> -
                    Add Email template</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route($module_name.'.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                        Home</a>
                    <a href="{{ route($module_name.'.email_templates.index') }}" class="breadcrumb-item">Email templates</a>
                    <span class="breadcrumb-item active">Add Email template</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <div class="content">
        <div class="card">
            <div class="card-body">
                @include('admin.particles._sessionmessage',['error_type' => 'warning'])
                <form action="{{route($module_name.'.email_templates.store')}}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <label class="font-weight-semibold @error('title') text-danger @enderror"
                                   for="title">{{__('admin.title')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="title" id="title"
                                       class="form-control @error('title') border-danger @enderror"
                                       placeholder="{{__('admin.title')}}" value="{{ old('title') }}">
                            </div>
                            @error('title')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('subject_en') text-danger @enderror"
                                   for="subject_en">{{__('admin.subject_en')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="subject_en" id="subject_en"
                                       class="form-control @error('subject_en') border-danger @enderror"
                                       placeholder="{{__('admin.subject_en')}}" value="{{ old('subject_en') }}">
                            </div>
                            @error('subject_en')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('subject_az') text-danger @enderror"
                                   for="subject_az">{{__('admin.subject_az')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="subject_az" id="subject_az"
                                       class="form-control @error('subject_az') border-danger @enderror"
                                       placeholder="{{__('admin.subject_az')}}" value="{{ old('subject_az') }}">
                            </div>
                            @error('subject_az')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('subject_es') text-danger @enderror"
                                   for="subject_es">{{__('admin.subject_es')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="subject_es" id="subject_es"
                                       class="form-control @error('subject_es') border-danger @enderror"
                                       placeholder="{{__('admin.subject_es')}}" value="{{ old('subject_es') }}">
                            </div>
                            @error('subject_es')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('subject_ru') text-danger @enderror"
                                   for="subject_ru">{{__('admin.subject_ru')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="subject_ru" id="subject_ru"
                                       class="form-control @error('subject_ru') border-danger @enderror"
                                       placeholder="{{__('admin.subject_ru')}}" value="{{ old('subject_ru') }}">
                            </div>
                            @error('subject_ru')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="font-weight-semibold @error('content_en') text-danger @enderror"
                                   for="content_en">{{__('admin.content_en')}}</label>
                            <textarea id="editor_en" rows="3" cols="3"
                                      class="form-control @error('content_en') border-danger @enderror editor"
                                      name="content_en" placeholder="{{__('admin.content_en')}}">
                                    {{ old('content_en') }}
                                </textarea>
                            @error('content_en')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="font-weight-semibold @error('content_az') text-danger @enderror"
                                   for="content_az">{{__('admin.content_az')}}</label>
                            <textarea id="editor_az" rows="3" cols="3"
                                      class="form-control @error('content_az') border-danger @enderror editor"
                                      name="content_az" placeholder="{{__('admin.content_az')}}">
                                    {{ old('content_az') }}
                                </textarea>
                            @error('content_az')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="font-weight-semibold @error('content_es') text-danger @enderror"
                                   for="content_es">{{__('admin.content_es')}}</label>
                            <textarea id="editor_es" rows="3" cols="3"
                                      class="form-control @error('content_es') border-danger @enderror editor"
                                      name="content_es" placeholder="{{__('admin.content_es')}}">
                                    {{ old('content_es') }}
                                </textarea>
                            @error('content_es')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="font-weight-semibold @error('content_ru') text-danger @enderror"
                                   for="content_ru">{{__('admin.content_ru')}}</label>
                            <textarea id="editor_ru" rows="3" cols="3"
                                      class="form-control @error('content_ru') border-danger @enderror editor"
                                      name="content_ru" placeholder="{{__('admin.content_ru')}}">
                                    {{ old('content_ru') }}
                                </textarea>
                            @error('content_ru')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-12">
                            <x-save/>
                            <x-back route="{{$module_name}}.email_templates.index"></x-back>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
@section('script')
    <script>
        $(".editor").each(function () {
            let id = $(this).attr('id');
            CKEDITOR.replace(id, {
                filebrowserUploadUrl: "{{route($module_name.'.ckeditor.upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form',
                allowedContent: true
            });
        });
    </script>
@stop
