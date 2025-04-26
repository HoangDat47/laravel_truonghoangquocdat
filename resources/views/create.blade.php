<form action="" method="post">
    @csrf
    <div>
        <label for="name">Ma phong tro:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="name">Ten nguoi thue:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="name">So dien thoai:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="name">Ngay thue:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="name">Hinh thuc thanh toan:</label>
        <select class="form-control show-tick" name="kichhoat">
            <option value="1">Theo thang</option>
            <option value="2">Theo quy</option>
            <option value="3">Theo nam</option>
        </select>
    </div>
    <div>
        <label for="name">Ma phong tro:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <button type="submit">tao moi</button>
        <button>huy</button>
    </div>
</form>