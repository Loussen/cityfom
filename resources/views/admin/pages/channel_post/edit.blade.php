@extends('admin.layouts.app')
@section('title', __('admin.home'))
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cityfom</span> -
                    Edit Channel Post</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>
                        Home</a>
                    <a href="{{ route('admin.channel_post.index') }}" class="breadcrumb-item">Channel Posts</a>
                    <span class="breadcrumb-item active">Edit Channel</span>
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
                <form action="{{route('admin.channel_post.update', $channelPost->id)}}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('store_id') text-danger @enderror"
                                   for="store_id">{{__('admin.stores')}}</label>
                            <select name="store_id" class="select-search" id="store_id">
                                <option value="0">{{__('admin.please_select')}} ...</option>
                                @foreach($stores as $store)
                                    <option
                                        {{ old('store_id',$selectedStore->store_id) == $store->id ? 'selected': '' }} value="{{$store->id}}">{{$store->name}}</option>
                                @endforeach
                            </select>
                            @error('store_id')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('channel_id') text-danger @enderror"
                                   for="channel_id">{{__('admin.channel')}}</label>
                            <select name="channel_id" class="channel_id" id="channel_id">
                                <?php
                                if(old('channel_id', $channelPost->channel_id)) {
                                $explodeChannelId = explode("-", old('channel_id', $channelPost->channel_id));
                                $selectedChannel = \Illuminate\Support\Facades\DB::table('channels AS c')
                                    ->join('channel_category AS cc', 'cc.id', '=', 'c.channel_category_id')
                                    ->whereRaw('c.id = ' . $explodeChannelId[0])
                                    ->select('c.title AS channel_title', 'cc.name AS category_name', 'cc.id AS category_id')
                                    ->first();
                                ?>
                                <option
                                    value={{ old('channel_id', $channelPost->channel_id)."-".$selectedChannel->category_id }}>{{ $selectedChannel->category_name." - ".$selectedChannel->channel_title }}</option>
                                <?php
                                }
                                ?>
                            </select>

                            @error('channel_id')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('title') text-danger @enderror"
                                   for="title">{{__('admin.title')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="title" id="title"
                                       class="form-control @error('title') border-danger @enderror"
                                       placeholder="{{__('admin.title')}}"
                                       value="{{ old('title', $channelPost->title) }}">
                            </div>
                            @error('title')
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
                                          placeholder="{{__('admin.description')}}">{{ old('description', $channelPost->description) }}</textarea>
                            </div>
                            @error('description')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-weight-semibold @error('reorder') text-danger @enderror"
                                   for="reorder">{{__('admin.reorder')}}</label>
                            <div class="form-group-feedback form-group-feedback-right">
                                <input type="text" name="reorder" id="reorder"
                                       class="form-control @error('reorder') border-danger @enderror"
                                       placeholder="{{__('admin.reorder')}}"
                                       value="{{ old('reorder', $channelPost->reorder) }}">
                            </div>
                            @error('reorder')
                            <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="border border-success row col-sm-12 p-2 additional"
                             style="margin: 0 auto 10px auto; display: none;">
                            <h2 class="text-center col-sm-12">Details</h2>
                            <div class="form-group col-sm-6 price">
                                <label class="font-weight-semibold @error('price') text-danger @enderror"
                                       for="price">{{__('admin.price')}}</label>
                                <div class="form-group-feedback form-group-feedback-right">
                                    <input type="text" name="price" id="price"
                                           class="form-control @error('price') border-danger @enderror"
                                           placeholder="{{__('admin.price')}}" value="{{ old('price', $channelPost->price) }}">
                                </div>
                                @error('price')
                                <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-sm-6 new_price">
                                <label class="font-weight-semibold @error('new_price') text-danger @enderror"
                                       for="new_price">{{__('admin.new_price')}}</label>
                                <div class="form-group-feedback form-group-feedback-right">
                                    <input type="text" name="new_price" id="new_price"
                                           class="form-control @error('new_price') border-danger @enderror"
                                           placeholder="{{__('admin.new_price')}}" value="{{ old('new_price', $channelPost->price) }}">
                                </div>
                                @error('new_price')
                                <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-sm-6 old_price">
                                <label class="font-weight-semibold @error('old_price') text-danger @enderror"
                                       for="old_price">{{__('admin.old_price')}}</label>
                                <div class="form-group-feedback form-group-feedback-right">
                                    <input type="text" name="old_price" id="old_price"
                                           class="form-control @error('old_price') border-danger @enderror"
                                           placeholder="{{__('admin.old_price')}}" value="{{ old('old_price', $channelPost->old_price) }}">
                                </div>
                                @error('old_price')
                                <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-sm-6 image">
                                <label class="font-weight-semibold @error('media') text-danger @enderror"
                                       for="media">{{__('admin.media')}}</label>
                                <input type="file" name="media" class="form-input-styled" data-fouc/>
                                <span
                                    class="form-text text-muted">Accepted formats: jpg, jpeg, png, mpeg, mov, wav, avi, dat, flv, 3gp, m4v, mp4. Max file size 10Mb</span>
                                <?php
                                if($channelPost->media !== null)
                                {
                                echo "<br />";
                                $explodeImage = explode(".", $channelPost->media);
                                $imageType = end($explodeImage);
                                if(in_array(strtolower($imageType), ['jpg', 'jpeg', 'png']))
                                {
                                ?>
                                <a href="javascript:void(0);" class="pop"><img
                                        src="{{ asset('/uploads/channel_posts/'.$channelPost->media) }}"
                                        style="max-width: 300px; max-height: 300px;"/></a>
                                <?php
                                }
                                elseif(in_array(strtolower($imageType), [["mpeg", "mov", "wav", "avi", "dat", "flv", "3gp", "m4v", "mp4"]]) && file_exists(public_path()."/uploads/channel_posts/".$channelPost->media))
                                {
                                    ?>
                                    <video width="200" height="200" controls>
                                        <source
                                            src="{{asset("/uploads/channel_posts/".$channelPost->media)}}"
                                            type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <?php
                                }
                                ?>
                                <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" data-dismiss="modal">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal"><span
                                                        aria-hidden="true">&times;</span><span
                                                        class="sr-only">Close</span>
                                                </button>
                                                <img src="" class="imagepreview" style="width: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                                @error('media')
                                <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-sm-6 public_expire_date">
                                <label class="font-weight-semibold @error('public_expire_date') text-danger @enderror"
                                       for="public_expire_date">{{__('admin.public_expire_date')}}</label>
                                <div class="form-group-feedback form-group-feedback-right">
                                    <div class="input-group">
                                <span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar22"></i></span>
										</span>
                                        <input type="text" name="public_expire_date" id="public_expire_date" class="form-control daterange-basic"
                                               value="{{ old('public_expire_date',date("m/d/Y",$channelPost->publication_date/1000)." - ".date("m/d/Y",$channelPost->expiration_date/1000)) }}">
                                    </div>
                                </div>
                                @error('public_expire_date')
                                <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-sm-6 additional_text">
                                <label class="font-weight-semibold @error('additional_text') text-danger @enderror"
                                       for="additional_text">{{__('admin.additional_text')}}</label>
                                <div class="form-group-feedback form-group-feedback-right">
                                    <textarea rows="3" cols="3"
                                              class="form-control @error('additional_text') border-danger @enderror"
                                              name="additional_text"
                                              placeholder="{{__('admin.additional_text')}}">{{ old('additional_text',$channelPost->additional) }}</textarea>
                                </div>
                                @error('additional_text')
                                <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="border border-success row col-sm-12 p-2 promote_offer"
                             style="margin: 0 auto 10px auto; display: none;">
                            <h2 class="text-center col-sm-12">Promote offer (Optional)</h2>
                            <div class="form-group col-sm-6 start_end_promote">
                                <label class="font-weight-semibold @error('start_end_promote') text-danger @enderror"
                                       for="start_end_promote">{{__('admin.start_end_promote')}}</label>
                                <div class="form-group-feedback form-group-feedback-right">
                                    <div class="input-group">
                                <span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar22"></i></span>
										</span>
                                        <?php
                                        if($channelPost->radius > 0) {
                                        ?>
                                        <input type="text" name="start_end_promote" id="start_end_promote"
                                               class="form-control daterange-basic"
                                               value="{{ old('start_end_promote',date("m/d/Y",strtotime($channelPost->start_date_promote))." - ".date("m/d/Y",strtotime($channelPost->end_date_promote))) }}">-
                                        <?php
                                        } else {
                                        ?>
                                        <input type="text" name="start_end_promote" id="start_end_promote"
                                               class="form-control daterange-basic"
                                               value="{{ old('start_end_promote',date("m/d/Y")." - ".date("m/d/Y")) }}">
                                        <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                                @error('start_end_promote')
                                <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="font-weight-semibold @error('radius') text-danger @enderror"
                                       for="radius">{{__('admin.radius')}} (km)</label>
                                <select name="radius" class="select-search" id="radius">
                                    <option value="0">{{__('admin.please_select')}} ...</option>
                                    @foreach($radius as $keyRadius => $valueRadius)
                                        <option
                                            {{ old('radius',$channelPost->radius) == $keyRadius ? 'selected': '' }} value="{{$keyRadius}}">{{$valueRadius}}</option>
                                    @endforeach
                                </select>
                                @error('radius')
                                <span class="form-text font-weight-semibold text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <x-save/>
                            <x-back route="admin.channel_post.index"></x-back>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
@section('script')
    <script>
        function get_channel_categories(store_id) {
            $('select#channel_id').select2({
                placeholder: 'Select category',
                allowClear: true,
                ajax: {
                    url: "{{ route('admin.channel_post.channelCategoryFilter') }}",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        let query = {store_id: store_id, q: params.term}

                        return query;
                    },
                    processResults: function (data) {
                        return {
                            results: $.map(data.response, function (item) {
                                return {
                                    text: item.category_name + " - " + item.channel_title,
                                    id: item.channel_id + "-" + item.category_id,
                                }
                            })
                        };
                    },
                    cache: true
                }
            });
        }

        let selected_store = $('select#store_id').find('option:selected').val();
        if (!selected_store > 0) selected_store = 0;

        get_channel_categories(selected_store);

        $('select[name="store_id"]').on('change', function () {

            let selected_store = $(this).find('option:selected').val();
            if (!selected_store > 0) selected_store = 0;

            $("select#channel_id").val('').trigger('change');

            get_channel_categories(selected_store);

        });

        setTimeout(function () {
            let data_type = $("select#channel_id").find(':selected');

            if (data_type.length > 0) {
                data_type = data_type.val().split("-");
            }

            changeCategory(data_type);
        }, 1000);

        function changeCategory($this) {
            $("div.additional div.form-group").hide();
            $("div.promote_offer").hide();

            let data_type = $this;

            if (data_type.length > 0) {
                if (data_type[1] == 1 || data_type[1] == 2) {
                    $("div.additional").show();

                    $("div.price").show();
                    $("div.image").show();
                } else if (data_type[1] == 3) {
                    $("div.additional").show();

                    $("div.new_price").show();
                    $("div.old_price").show();
                    $("div.image").show();
                    $("div.promote_offer").show();
                    // $("div.additional_offer div.form-group").show();
                } else if (data_type[1] == 4 || data_type[1] == 5 || data_type[1] == 6) {
                    $("div.additional").show();

                    $("div.additional_text").show();
                    $("div.image").show();
                }

                $("div.public_expire_date").show();
            }
        }

        $("select#channel_id").on("change", function () {
            let data_type = $(this).find(':selected');

            if (data_type.length > 0) {
                data_type = data_type.val().split("-");
                changeCategory(data_type);
            }
        });
    </script>
@stop
