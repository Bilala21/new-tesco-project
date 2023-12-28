<div class="header-center">
    <div class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block">
        <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
        <form action="{{route('product.search')}}" >
            <div class="header-search-wrapper search-wrapper-wide">
                
                <label for="q" class="sr-only">Search</label>
                <input type="text" class="form-control" value="{{$search}}" name="search" id="" placeholder="I am shopping for..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </div><!-- End .header-search-wrapper -->
        </form>
    </div><!-- End .header-search -->
</div>