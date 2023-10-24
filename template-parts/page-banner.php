<!-- <div class:list={[ "page-banner page-title-cont grey-dark-bg page-title-img" , classes, ]} style={defaultStyle}> -->
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-banner__main">
                    <img src="/images/Maker Studio-ZH_01970.jpg" alt="page banner sample" />
                    <div class="page-banner__content glass_only">
                        <h1 class="page-banner__title">{title}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <slot name="breadcrumb">
                    <div class="breadcrumbs ps-3">
                        <a href="/">Home</a>
                        <span class="slash-divider">/</span>
                        <a href="#">BLOG</a>
                        <span class="slash-divider">/</span>
                        <span class="bread-current">MASONRY</span>
                    </div>
                </slot>
            </div>
        </div>
    </div>
</div>