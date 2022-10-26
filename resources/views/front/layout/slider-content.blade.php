<div class="p-0">
    <!-- <div class="grid-lines grid-lines-horizontal z-index-1">
        <span class="g-line-horizontal line-bottom color-line-secondary"></span>
    </div>
    <div class="grid-lines grid-lines-vertical z-index-1">
        <span class="g-line-vertical line-left color-line-secondary"></span>
        <span class="g-line-vertical line-right color-line-secondary"></span>
    </div> -->


    <div  id="rev_slider_one_wrapper" class="tp-bgimg defaultimg " data-alias="mask-showcase" data-source="gallery">
        <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
        <div id="rev_slider_one" class="rev_slider" data-version="5.4.1">
            <ul>
                @foreach($service as $key => $value)
                <li data-index="rs-70" data-transition="fade" data-slotamount="{{$key}}" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off"  data-param1="1" >
                    <img src="/uploads/{{$value->getServiceMineImages($value->id)->image}}" data-bgcolor='rgba(255,255,255,0)' style="height: 600px" alt="slidebg{{$key}}" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg" data-bgrepeat="no-repeat" data-bgparallax="off" data-no-retina>
                    <div  style="position: absolute; top:10%; display: block; width:100%;height:100%">
                        <div class="tp-caption" style="width: 500px; background-color: #0007; white-space: normal !important;" data-start="500" data-transform_in="x:40;y:0;o:0;s:1200;e:easeInOutExpo;" data-transform_out="x:0;y:0;o:0;s:500;e:easeInOutExpo;" id="layer-597158573" style="visibility: inherit; transition: none 0s ease 0s; text-align: inherit; line-height: 14px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 14px; white-space: normal; min-height: 0px; min-width: 0px; max-height: none; max-width: none; opacity: 0.0001; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;">
                            <div class="slider-content-box" style="display: flex; flex-wrap: wrap; width: 500px; padding:15px 20px;">
                                <h2><a href="/services?id=14" title="Flooring" style="color:azure">Flooring</a></h2>
                                <div style="height: 1px; background-color: #9f9e9e; width:100%; margin-bottom: 8px;"></div>
                                <p style="font-size: 18px; line-height: 1em; width: 100% !important;color:#cacaca">
                                    We strive to create interior spaces
                                    that enhance your style and drive creativity and inspiration.
                                    By illustrating your decor with different types of
                                    materials and elements, our flooring options give you the choice
                                    to express yourself to the fullest.
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>


