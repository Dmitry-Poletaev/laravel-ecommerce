
<script type="text/template" data-modal="mobile-sidebar">
<div class="sidebar">

    <div class="sidebar-block">
      <div class="sidebar-block-heading">
        Каталог товаров
      </div>
  
      <div class="sidebar-block-content">
        
  
      <ul class="mobile-sidebar-menu menu level-1" data-menu-id="mobile-sidebar-menu">
        @foreach ($categories as $category)
  
            <li class="mobile-sidebar-menu-item menu-item level-1">
              <div class="mobile-sidebar-menu-item-controls menu-item-controls level-1">
  
  
                <a href="#" class="mobile-sidebar-menu-link menu-link level-1" data-menu-link="spetsinstrument" data-menu-link-source="collection">
                 {{ $category->name }}
                </a>
  
                
                  <button class="mobile-sidebar-menu-marker menu-marker" type="button"></button>
                
              </div>
  
              <ul class="mobile-sidebar-menu menu">
                @php
                  $subcat = DB::table('subcategories')->where('category_id', $category->id)->get();
                @endphp
                @foreach ($subcat as $item)
                  <li class="mobile-sidebar-menu-item menu-item level-1">
                    <div class="mobile-sidebar-menu-item-controls menu-item-controls level-1">
                      <a href="#" class="mobile-sidebar-menu-link menu-link level-1" data-menu-link="gotovye-resheniya" data-menu-link-source="collection">
                        {{$item->name}}
                      </a>
                      
                    </div>
                  </li>
                @endforeach
              </ul>
        @endforeach
      </ul>
    
  
      </div>
    </div>
  
    <div class="sidebar-block">
      <div class="sidebar-block-heading">
        Верхнее меню
      </div>
  
      <div class="sidebar-block-content">
        
  
  
    <ul class="mobile-sidebar-menu menu level-1" data-menu-id="mobile-sidebar-menu">
      
  
  
        <li class="mobile-sidebar-menu-item menu-item">
          <div class="mobile-sidebar-menu-item-controls menu-item-controls">
            
            <a href="{{ url('/credit') }}" class="mobile-sidebar-menu-link menu-link" data-menu-link-source="menu" data-menu-link-current="no">
              Рассрочка
            </a>
          </div>
        </li>
  
  
        <li class="mobile-sidebar-menu-item menu-item">
          <div class="mobile-sidebar-menu-item-controls menu-item-controls">
            
  
            <a href="{{ url('/about') }}" class="mobile-sidebar-menu-link menu-link" data-menu-link-source="menu" data-menu-link-current="no">
              О компании
            </a>
          </div>
        </li>
  
  
        <li class="mobile-sidebar-menu-item menu-item">
          <div class="mobile-sidebar-menu-item-controls menu-item-controls">
            
  
            <a href="{{ url('/contact') }}" class="mobile-sidebar-menu-link menu-link" data-menu-link-source="menu" data-menu-link-current="no">
              Контакты
            </a>
          </div>
        </li>
  
  
  
        <li class="mobile-sidebar-menu-item menu-item">
          <div class="mobile-sidebar-menu-item-controls menu-item-controls">
            
  
            <a href="{{ url('/delivery') }}" class="mobile-sidebar-menu-link menu-link" data-menu-link-source="menu" data-menu-link-current="no">
              Доставка
            </a>
          </div>
        </li>
  
  
        <!--<li class="mobile-sidebar-menu-item menu-item">
          <div class="mobile-sidebar-menu-item-controls menu-item-controls">
            
  
            <a href="#" class="mobile-sidebar-menu-link menu-link" data-menu-link-source="menu" data-menu-link-current="no">
              Организациям
            </a>
          </div>
        </li>-->
  
        <li class="mobile-sidebar-menu-item menu-item">
          <div class="mobile-sidebar-menu-item-controls menu-item-controls">
            
  
            <a href="{{ url('/warranty') }}" class="mobile-sidebar-menu-link menu-link" data-menu-link-source="menu" data-menu-link-current="no">
              Гарантия
            </a>
          </div>
        </li>
  
        <li class="mobile-sidebar-menu-item menu-item">
          <div class="mobile-sidebar-menu-item-controls menu-item-controls">
            
            <a href="#" class="mobile-sidebar-menu-link menu-link" data-menu-link-source="menu" data-menu-link-current="no">
              Сервис
            </a>
          </div>
        </li>
  
      
    </ul>
  
  
      </div>
  
    </div>
</div>
</script>