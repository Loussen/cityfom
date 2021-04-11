<button class="btn btn-sm btn-light clear-button" type="button"><i class="icon-spinner11"></i> {{__('admin.clear')}}</button>
<script>
    $(document).ready(function () {
        $("button.clear-button").on("click", function () {

            $('div.search-item').find('select').not(".region_id").val(null).trigger('change');
            $("div.search-item input").val('');
        })
    })
</script>
