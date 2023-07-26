@foreach ($partners as $partner)
    <div class="col-lg-2 col-md-2 col-sm-12" style="padding: 4px;">
        <div style="border: 1px solid #eee;">
            <a href="{{ $partner->link }}" target="_blank">
                <img src="{{ URL::asset('root/upload/partners/' . $partner->logo) }}" alt="Partner" width="410"
                    height="186" />
            </a>
        </div>
    </div>
@endforeach
