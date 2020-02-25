    {{ csrf_field() }}
    <div class="box-body">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="name" name="name" value="{{isset($user) ? $user->{'name'} : ''}}" class="form-control  @error('name') is-invalid @enderror" id="inputEmail3" placeholder="Name">
                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" value="{{isset($user) ? $user->{'email'} : ''}}" class="form-control  @error('email') is-invalid @enderror" id="inputEmail3" placeholder="Email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword3" placeholder="Password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="inputGroup3" class="col-sm-2 control-label">Group</label>
            <div class="col-sm-10">
            <select name="{{'group'}}" class="form-control @error('group') is-invalid @enderror"  id="inputGroup3">
                <option value="admin" {{isset($user) && $user->{'group'} == 'admin' ? 'selected' : ''}}>admin</option>
                <option value="user" {{isset($user) && $user->{'group'} == 'user' ? 'selected' : ''}}>user</option>
            </select>
            @error('group')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
            @enderror
            </div>
        </div>
    </div><!-- /.box-body -->

