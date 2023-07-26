{{-- <style>
 .yolo {
  position: relative;
  /* width: 50%; */
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #ffffff;
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}

.container:hover .overlay {
  -webkit-transform: scale(1.2);
  -ms-transform: scale(1.2);
  transform: scale(1.2);
}
</style> --}}
<style>
    .yolo:hover .overlay{
       
  -webkit-transform: scale(1.2);
  -ms-transform: scale(1.2);
  transform: scale(1.2);
 
    }
    .overlay {
  /* position: absolute; */
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #ffffff;
  /* overflow: hidden; */
  /* width: 100%; */
  /* height: 100%; */
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}
</style>
@foreach ($brands as $brand)
    <div class="swiper-slide">
        <a href="//{{ $brand->link }}" target="_blank">
            {{-- <figure class="overlay">
                <img src="{{ URL::asset('root/upload/brands/small/' . $brand->logo) }}"
                    alt="{{ $brand->brand_name }} Brand" width="160" height="90" />
            </figure> --}}


            <div class="yolo">
                {{-- <img src="{{ URL::asset('root/upload/brands/small/' . $brand->logo) }}"
                alt="{{ $brand->brand_name }} Brand" width="160" height="90" class="image"> --}}
                <div class=" overlay">
                    <img src="{{ URL::asset('root/upload/brands/small/' . $brand->logo) }}"
                    alt="{{ $brand->brand_name }} Brand" width="160" height="90" class="image">
                </div>
              </div>
        </a>
    </div>
@endforeach