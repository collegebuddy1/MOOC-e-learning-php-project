

    <div style="text-align: center;padding-top: 250px;">
                  <form action="" method="POST">
                    {{{ csrf_field() }}}

                      @if ($errors->any())
              <div class="alert alert-danger">
              <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
               @endforeach
                            </ul>
                          </div>
                     @endif

                   <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                          <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                          <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation" required>
                        </div>
                      </div>
                  

                     

                      <div class="form-group">
                          <input type="submit" value="Update Password" class="btn btn-success">
                      </div>

                  </form>
                </div>
                </div>