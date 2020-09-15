@php
    $categories = DB::table('categories')->get();
@endphp

  <div class="sidebar-block">
    <div class="sidebar-block-heading mega-menu-main_heading">
      Каталог
    </div>

    <div class="sidebar-block-content">
      <ul class="sidebar-menu menu level-1" data-menu-id="sidebar-menu">
        @foreach ($categories as $category)
            
        <li class="sidebar-menu-item menu-item level-1">
          <div class="sidebar-menu-item-controls menu-item-controls level-1">
            <a href="#" class="sidebar-menu-link menu-link level-1" data-menu-link="ruchnoy-instrument" data-menu-link-source="collection">
              {{ $category->name }}
            </a>
            <button class="sidebar-menu-marker menu-marker" type="button"></button>
          </div>

          <ul class="sidebar-menu menu">
            @php
              $subcat = DB::table('subcategories')->where('category_id', $category->id)->get();
            @endphp
            @foreach ($subcat as $item)
            <li class="sidebar-menu-item menu-item level-1">
              <div class="sidebar-menu-item-controls menu-item-controls level-1">
                <a href="{{ url('product/all/' . $item->id) }}" class="sidebar-menu-link menu-link level-1" data-menu-link="gotovye-resheniya" data-menu-link-source="collection">
                  {{$item->name}}
                </a>
              </div>
            </li>
            @endforeach
            
          </ul>
        </li>
        @endforeach
      </ul>



   </div>
