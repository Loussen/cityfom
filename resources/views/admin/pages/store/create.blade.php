@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> -
                    Add Store</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                        Home</a>
                    <a href="{{ route('admin.store.index') }}" class="breadcrumb-item">Stores</a>
                    <span class="breadcrumb-item active">Add Store</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <div class="content">
        <div class="card">
            <div class="card-body">
                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
                @include('admin.particles._sessionmessage',['error_type' => 'warning'])
                <form action="{{route('admin.store.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('name') text-danger @enderror"
                                   for="name">{{__('admin.name')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="name" id="name"
                                       class="form-control @error('name') border-danger @enderror"
                                       placeholder="{{__('admin.name')}}" value="{{ old('name') }}">
                            </div>
                            @error('name')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('description') text-danger @enderror"
                                   for="description">{{__('admin.description')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <textarea rows="3" cols="3"
                                          class="form-control @error('description') border-danger @enderror"
                                          name="description"
                                          placeholder="{{__('admin.description')}}">{{ old('description') }}</textarea>
                            </div>
                            @error('description')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('tags') text-danger @enderror"
                                   for="tags">{{__('admin.tags')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                @if (is_array(old('tags')))
                                    <select id="tags" name="tags[]" class="form-control select-multiple-tags"
                                            multiple="multiple" data-fouc>
                                        @foreach (old('tags') as $tag)
                                            <option value="{{ $tag }}" selected="selected">{{ $tag }}</option>
                                        @endforeach
                                    </select>
                                @else
                                    <select name="tags[]" id="tags" class="form-control select-multiple-tags"
                                            multiple="multiple" data-fouc></select>
                                @endif
                            </div>
                            @error('tags')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('category_id') text-danger @enderror"
                                   for="category_id">{{__('admin.category')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <select name="category_id[]" id="category_id"
                                        class="form-control select-multiple-limited" multiple="multiple" data-fouc>
                                    @foreach($categories as $category)
                                        <option
                                            {{ collect(old('category_id'))->contains($category->id) ? 'selected': '' }} value="{{$category->id}}">{{$category->name_en}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('category_id')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('address') text-danger @enderror"
                                   for="address">{{__('admin.address')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="address" id="address"
                                       class="form-control @error('address') border-danger @enderror"
                                       placeholder="{{__('admin.address')}}" value="{{ old('address') }}"
                                       onfocusout="get_long_let()">
                                <input type="hidden" id="latitude" value="{{ old('latitude') }}" name="latitude">
                                <input type="hidden" id="longitude" value="{{ old('longitude') }}" name="longitude">
                            </div>
                            @error('address')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('country') text-danger @enderror"
                                   for="country">{{__('admin.country')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="country" id="country"
                                       class="form-control @error('country') border-danger @enderror"
                                       placeholder="{{__('admin.country')}}" value="{{ old('country') }}">
                            </div>
                            @error('country')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('email') text-danger @enderror"
                                   for="email">{{__('admin.email')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="email" name="email" id="email"
                                       class="form-control @error('email') border-danger @enderror"
                                       placeholder="{{__('admin.email')}}" value="{{ old('email') }}">
                            </div>
                            @error('email')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('phone') text-danger @enderror"
                                   for="phone">{{__('admin.phone')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="phone" id="phone"
                                       class="form-control @error('phone') border-danger @enderror"
                                       placeholder="{{__('admin.phone')}}" value="{{ old('phone') }}">
                            </div>
                            @error('phone')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('facebook_url') text-danger @enderror"
                                   for="facebook_url">{{__('admin.facebook_url')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="facebook_url" id="facebook_url"
                                       class="form-control @error('facebook_url') border-danger @enderror"
                                       placeholder="{{__('admin.facebook_url')}}" value="{{ old('facebook_url') }}">
                            </div>
                            @error('facebook_url')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('twitter_url') text-danger @enderror"
                                   for="twitter_url">{{__('admin.twitter_url')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="twitter_url" id="twitter_url"
                                       class="form-control @error('twitter_url') border-danger @enderror"
                                       placeholder="{{__('admin.twitter_url')}}" value="{{ old('twitter_url') }}">
                            </div>
                            @error('twitter_url')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('instagram_url') text-danger @enderror"
                                   for="instagram_url">{{__('admin.instagram_url')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="instagram_url" id="instagram_url"
                                       class="form-control @error('instagram_url') border-danger @enderror"
                                       placeholder="{{__('admin.instagram_url')}}" value="{{ old('instagram_url') }}">
                            </div>
                            @error('instagram_url')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('website') text-danger @enderror"
                                   for="website">{{__('admin.website')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="website" id="website"
                                       class="form-control @error('website') border-danger @enderror"
                                       placeholder="{{__('admin.website')}}" value="{{ old('website') }}">
                            </div>
                            @error('website')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('partner_type') text-danger @enderror"
                                   for="partner_type">{{__('admin.partner_type')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <select name="partner_type"
                                        class="form-control @error('partner_type') border-danger @enderror"
                                        id="partner_type">
                                    <option value="0">{{__('admin.please_select')}} ...</option>
                                    @foreach($partnerTypes as $typeKey => $typeVal)
                                        <option
                                            {{ old('partner_type') == $typeKey ? 'selected': '' }} value="{{$typeKey}}">{{$typeVal}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('partner_type')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('image') text-danger @enderror"
                                   for="image">{{__('admin.images')}}</label>
                            <input type="file" name="image[]" id="image" multiple accept="image/*"/>
                            <span
                                class="form-text text-muted">Accepted formats: jpg, jpeg, png. Max file size 2Mb</span>
                            @error('image')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-sm-12">
                            <fieldset class="mb-3 opening_hours_store">
                                <legend
                                    class="text-uppercase font-size-sm font-weight-bold">{{__('admin.opening_hours')}}</legend>

                                @if(is_array(old('weekday')))
                                    @php $oldWeekdays = old('weekday') @endphp
                                    @php $oldFrom = old('from') @endphp
                                    @php $oldTo = old('to') @endphp
                                    @php $i = 1; @endphp
                                    @foreach($oldWeekdays as $keyOldWeekDay => $valueOldWeekDay)
                                        @php $j = $i + 1; @endphp
                                        @php $id1 = 'anytime_'.$i; @endphp
                                        @php $id2 = 'anytime_'.$j; @endphp
                                        <div class="row opening_hours_area"
                                             style="border: 1px solid #ccc; padding: 5px; margin-bottom: 5px;">
                                            <div class="col-sm-2">
                                                <select class="form-control" name="weekday[]">
                                                    @foreach($weekdays as $keyWeekDay => $valueWeekDay)
                                                        <option
                                                            {{ $valueOldWeekDay == $keyWeekDay ? 'selected' : '' }} value="{{ $keyWeekDay }}">{{ $valueWeekDay }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" name="from[]" class="form-control anytime"
                                                       id="{{ $id1 }}" value="{{ $oldFrom[$keyOldWeekDay] }}"
                                                       readonly="">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" name="to[]" class="form-control anytime"
                                                       id="{{ $id2 }}" value="{{ $oldTo[$keyOldWeekDay] }}"
                                                       readonly="">
                                            </div>
                                            <div class="col-sm-2">
                                                <i class="icon-close2 hour_close" style="cursor: pointer;"></i>
                                            </div>
                                        </div>
                                        @php $i+=2 @endphp
                                    @endforeach
                                @else
{{--                                    <div class="row opening_hours_area"--}}
{{--                                         style="border: 1px solid #ccc; padding: 5px; margin-bottom: 5px;">--}}
{{--                                        <div class="col-sm-2">--}}
{{--                                            <select class="form-control" name="weekday[]">--}}
{{--                                                @foreach($weekdays as $keyWeekDay => $valueWeekDay)--}}
{{--                                                    <option value="{{ $keyWeekDay }}">{{ $valueWeekDay }}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-2">--}}
{{--                                            <input type="text" name="from[]" class="form-control anytime" id="anytime_1"--}}
{{--                                                   value="00:00"--}}
{{--                                                   readonly="">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-2">--}}
{{--                                            <input type="text" name="to[]" class="form-control anytime" id="anytime_2"--}}
{{--                                                   value="00:00"--}}
{{--                                                   readonly="">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-2">--}}
{{--                                            <i class="icon-close2 hour_close" style="cursor: pointer;"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                @endif

                            </fieldset>
                            <a href="javascript:void(0);" class="btn btn-outline-success add-hour"><i
                                    class="icon-plus2"></i> Add Hour</a>
                        </div>

                        <div class="col-sm-12 mb-2" style="border: 1px solid #eee;"></div>

                        <div class="form-group col-sm-12">
                            <fieldset class="mb-3 special_days_store">
                                <legend
                                    class="text-uppercase font-size-sm font-weight-bold">{{__('admin.special_days')}}</legend>

                                @if(is_array(old('special_date')))
                                    @php $oldSpecialDays = old('special_date') @endphp
                                    @php $oldSpecialHourFrom = old('from_special_hour') @endphp
                                    @php $oldSpecialHourTo = old('to_special_hour') @endphp
                                    @php $i = 1000; @endphp
                                    @foreach($oldSpecialDays as $keyOldSpecialDay => $valueOldSpecialDay)
                                        @php $j = $i + 1; @endphp
                                        @php $id1 = 'anytime_'.$i; @endphp
                                        @php $id2 = 'anytime_'.$j; @endphp
                                        <div class="row special_days_area"
                                             style="border: 1px solid #ccc; padding: 5px; margin-bottom: 5px;">
                                            <div class="col-sm-2">
                                                <input type="text" name="special_date[]" class="form-control daterange-single" value="{{ $valueOldSpecialDay }}">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" name="from_special_hour[]" class="form-control anytime"
                                                       id="{{ $id1 }}" value="{{ $oldSpecialHourFrom[$keyOldSpecialDay] }}"
                                                       readonly="">
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" name="to_special_hour[]" class="form-control anytime"
                                                       id="{{ $id2 }}" value="{{ $oldSpecialHourTo[$keyOldSpecialDay] }}"
                                                       readonly="">
                                            </div>
                                            <div class="col-sm-2">
                                                <i class="icon-close2 special_day_close" style="cursor: pointer;"></i>
                                            </div>
                                        </div>
                                        @php $i+=2 @endphp
                                    @endforeach
                                @else
{{--                                    <div class="row special_days_area"--}}
{{--                                         style="border: 1px solid #ccc; padding: 5px; margin-bottom: 5px;">--}}
{{--                                        <div class="col-sm-2">--}}
{{--                                            <input type="text" name="special_date[]" class="form-control daterange-single">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-2">--}}
{{--                                            <input type="text" name="from_special_hour[]" class="form-control anytime" id="anytime_998"--}}
{{--                                                   value="00:00"--}}
{{--                                                   readonly="">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-2">--}}
{{--                                            <input type="text" name="to_special_hour[]" class="form-control anytime" id="anytime_999"--}}
{{--                                                   value="00:00"--}}
{{--                                                   readonly="">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-2">--}}
{{--                                            <i class="icon-close2 special_day_close" style="cursor: pointer;"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                @endif

                            </fieldset>
                            <a href="javascript:void(0);" class="btn btn-outline-success add-special-day"><i
                                    class="icon-plus2"></i> Add Special Day</a>
                        </div>

                        <div class="col-sm-12">
                            <x-save/>
                            <x-back route="admin.store.index"></x-back>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
@section('script')
    <script
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places&key=AIzaSyB3F_B_YH0XuWy_EB-zK-w4hyNJ1vjEJqQ"></script>

    <script>


        function opening_hour_mask() {
            // $("input#anytime_1").AnyTime_picker(
            //     {format: '%H:%i'});
            // $("input#anytime_2").AnyTime_picker(
            //     {format: '%H:%i'});
            $("input[id^=anytime_]").AnyTime_picker(
                {format: '%h:%i'});
        }

        function initialize() {
            let input = document.getElementById('address');
            new google.maps.places.Autocomplete(input);
        }

        google.maps.event.addDomListener(window, 'load', initialize);

        function get_long_let() {
            let geocoder = new google.maps.Geocoder();
            let address = document.getElementById('address').value;
            geocoder.geocode({'address': address}, function (results, status) {
                if (results[0]) {
                    let country = '';

                    for (let i = 0; i < results[0].address_components.length; i++) {
                        country = results[0].address_components[i];
                        for (let b = 0; b < results[0].address_components[i].types.length; b++) {
                            if (results[0].address_components[i].types[b] == "country") {
                                country = results[0].address_components[i];
                                document.getElementById('country').value = country.long_name;
                                break;
                            }
                        }
                    }

                    console.log('ddada');
                }

                if (status == google.maps.GeocoderStatus.OK) {
                    let latitude = results[0].geometry.location.lat();
                    let longitude = results[0].geometry.location.lng();

                    document.getElementById('latitude').value = latitude;
                    document.getElementById('longitude').value = longitude;
                }
            });
        }

        $(document).ready(function () {

            $('a.add-hour').click(function (e) {
                let anytime_count = $("fieldset.opening_hours_store input.anytime").length;
                anytime_count = anytime_count + 1;
                $("fieldset.opening_hours_store").append(
                    '<div class="row opening_hours_area"\n' +
                    '                                     style="border: 1px solid #ccc; padding: 5px; margin-bottom: 5px;">\n' +
                    '                                    <div class="col-sm-2">\n' +
                    '                                        <select class="form-control" name="weekday[]">\n' +
                    '                                            @foreach($weekdays as $keyWeekday => $valueWeekday)\n' +
                    '                                                <option value="{{ $keyWeekday }}">{{ $valueWeekday }}</option>\n' +
                    '                                            @endforeach\n' +
                    '                                        </select>\n' +
                    '                                    </div>\n' +
                    '                                    <div class="col-sm-2">\n' +
                    '                                        <input type="text" class="form-control anytime" name="from[]" id="anytime_' + anytime_count + '" value="00:00"\n' +
                    '                                               readonly="">\n' +
                    '                                    </div>\n' +
                    '                                    <div class="col-sm-2">\n' +
                    '                                        <input type="text" class="form-control anytime" name="to[]" id="anytime_' + (anytime_count + 1) + '" value="00:00"\n' +
                    '                                               readonly="">\n' +
                    '                                    </div>\n' +
                    '                                    <div class="col-sm-2">\n' +
                    '                                        <i class="icon-close2 hour_close" style="cursor: pointer;"></i>\n' +
                    '                                    </div>\n' +
                    '                                </div>');

                $("input#anytime_" + anytime_count).AnyTime_picker(
                    {format: '%H:%i'});
                $("input#anytime_" + (anytime_count + 1)).AnyTime_picker(
                    {format: '%H:%i'});

            });

            $('a.add-special-day').click(function (e) {
                let anytime_count = $("fieldset.special_days_store input.anytime").length;
                anytime_count = anytime_count + 998;
                $("fieldset.special_days_store").append(
                    '<div class="row special_days_area"\n' +
                    '                                     style="border: 1px solid #ccc; padding: 5px; margin-bottom: 5px;">\n' +
                    '                                    <div class="col-sm-2">\n' +
                    '                                        <input type="text" name="special_date[]" class="form-control daterange-single">\n' +
                    '                                    </div>\n' +
                    '                                    <div class="col-sm-2">\n' +
                    '                                        <input type="text" class="form-control anytime" name="from_special_hour[]" id="anytime_' + anytime_count + '" value="00:00"\n' +
                    '                                               readonly="">\n' +
                    '                                    </div>\n' +
                    '                                    <div class="col-sm-2">\n' +
                    '                                        <input type="text" class="form-control anytime" name="to_special_hour[]" id="anytime_' + (anytime_count + 1) + '" value="00:00"\n' +
                    '                                               readonly="">\n' +
                    '                                    </div>\n' +
                    '                                    <div class="col-sm-2">\n' +
                    '                                        <i class="icon-close2 special_day_close" style="cursor: pointer;"></i>\n' +
                    '                                    </div>\n' +
                    '                                </div>');

                $("input#anytime_" + anytime_count).AnyTime_picker(
                    {format: '%H:%i'});
                $("input#anytime_" + (anytime_count + 1)).AnyTime_picker(
                    {format: '%H:%i'});

                $("input.daterange-single").daterangepicker({
                    singleDatePicker: true
                });

            });

            opening_hour_mask();

            $(window).keydown(function (event) {

                if (event.keyCode == 13) {
                    event.preventDefault();
                    setTimeout(function () {
                        get_long_let();
                    }, 500);
                    return false;
                }
            });

            $(".opening_hours_store").on('click', '.hour_close', function () {
                $(this).parents('div.opening_hours_area').remove();
            });

            $(".special_days_store").on('click', '.special_day_close', function () {
                $(this).parents('div.special_days_area').remove();
            });
        });
    </script>
@stop
