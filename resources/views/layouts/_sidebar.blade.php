 <!-- Sidebar Widgets Column -->
 <div class="col-md-4">
         
        
                  <!-- Categories Widget -->
                  <div class="card my-4"  >
                    <h5 class="card-header">Kategoriyalar boyicha oqish</h5>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-6">
                          <ul class="list-unstyled mb-0">
                            @foreach($categories->take(3) as $category)
                            <li>
                              <a href="/kategoriyalar/{{$category->slug}}">{{$category->title}}</a>
                            </li>
                            @endforeach
                             
                          </ul>
                        </div>
                      
                      </div>
                    </div>
                  </div>
        @auth
                  <!-- Side Widget -->
                  <div class="card my-4">
                    <h5 class="card-header" style="color:#721c24;background-color: #f8d7da;
                    border-color: #f5c6cb;">Diqqat!</h5>
                    <div class="card-body">
                     Izox qoldirganingizda boshqalarga xurmat saqlagan xolda, ularning fikrlarini xurmat qiling iltimos!
                    </div>
                  </div>
        @else
            <!-- Side Widget -->
            <div class="card my-4">
                    <h5 class="card-header" style="color:#721c24;background-color: #f8d7da;
                    border-color: #f5c6cb;">Diqqat!</h5>
                    <div class="card-body">
                        Iltimos izox qoldirish uchun saytga <a href="/login">kiring!</a>
                    </div>
                </div>
        @endauth
                </div>