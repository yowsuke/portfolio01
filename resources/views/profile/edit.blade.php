<form method="POST" action="profile/{{ $profile->userid }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        
    <div class="form-group col-md-8">
        <label for="exampleInputTeamname">チーム名</label>
        <input type="text" class="form-control" name="teamname" value="{{old('teamname')}}">
    </div>

    <div class="form-group col-md-8">
        <label for="exampleInputCategory">カテゴリー</label>
        <select name="category" class="form-control" id="exampleFormControlCategory">
        <option value="mix">ミックス</option>
        <option value="enjoy">エンジョイ</option>
        <option value="over30">オーバー30</option>
        <option value="under18">アンダー18</option>
        <option value="girls">女子</option>
        <option value="college">大学生</option>
        <option value="pro">競技志向</option>
        </select>
    </div>

    <div class="form-group col-md-8">
        <label for="exampleInputArea">主な活動地域</label>
        <select name="area" class="form-control" id="exampleFormControlPref">
        <option value="tokyo">東京都</option>
        <option value="tokyo">千葉県</option>
        <option value="tokyo">埼玉県</option>
        <option value="tokyo">神奈川県</option>
        </select>
    </div>

    <div class="form-group col-md-8">
        <label for="exampleInputAge">平均年齢</label>
        <select name="age" class="form-control" id="exampleFormControlAge">
        <option value="10">18歳以下</option>
        <option value="early20">20代前半</option>
        <option value="late20">20代後半</option>
        <option value="early30" selected>30代前半</option>
        <option value="late30">30代後半</option>
        <option value="early40">40代前半</option>
        <option value="late40">40代後半</option>
        </select>
    </div>

    <div class="form-group col-md-8">
        <label for="exampleInputIntroduce">チーム紹介</label>
        <textarea class="form-control" name="introduce" value="{{old('content')}}"></textarea>
    </div>
</form> 