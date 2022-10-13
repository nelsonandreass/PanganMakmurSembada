<div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="mbr-section-head align-center mb-4">
                    <h3 class="mbr-section-title mb-0 mbr-fonts-style display-2">
                        <strong>FAQ</strong>
                    </h3>
                    
                </div>
                <div id="bootstrap-accordion_14" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
               

                    @foreach($faqs as $faq)
                        <div class="card mb-3">
                            <div class="card-header" role="tab" id="{{$faq->id}}">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse1_14" aria-expanded="false" aria-controls="collapse1">
                                    <h6 class="panel-title-edit mbr-fonts-style mb-0 display-7"><strong>{{$faq->pertanyaan}}</strong>
                                    </h6>
                                    <span class="sign mbr-iconfont mbri-arrow-down"></span>
                                </a>
                            </div>
                            <div id="collapse1_14" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="{{$faq->id}}" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_14">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-4">{{$faq->jawaban}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="card mb-3">
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse2_14" aria-expanded="false" aria-controls="collapse2">
                                <h6 class="panel-title-edit mbr-fonts-style mb-0 display-7"><strong>What is Mobirise Kit?
                                    </strong></h6>
                                <span class="sign mbr-iconfont mbri-arrow-down"></span>
                            </a>
                        </div>
                        <div id="collapse2_14" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_14">
                            <div class="panel-body">
                                <p class="mbr-fonts-style panel-text display-4">
                                    Mobirise Kit is a service that provides the access to all current and new
                                    themes/extensions developed by Mobirise. New themes/extensions are released every
                                    month and will be available in your account during your plan period, without any
                                    additional charge.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>