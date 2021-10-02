Document
- Lấy ra thông tin User
- Từ thông tin User -> Lấy ra các danh mục mà User đó đã tạo

* hasMany relation
- Hasmany luôn được định nghĩa ở bảng là 1 trong quan hệ (1-N)

* belongsTo relation
- belongsTo luôn nằm ở bảng trong quan hệ 1 - N

* belongsToMany relation
* hasOne relation
    users - phones

    User 
        $this->hasOne(Phone::class)
    Phone:
        $this->hasOne(User::class)

* Query on relation 
- whereHas('relationName')
    Practice: Lấy ra tất cả các danh mục có câu hỏi. Và những câu hỏi đó thuộc exam1

    App\Models\Category::whereHas('questions', function($query) {
            $query->whereHas('exams', function($query) {
                $query->where('id', 1);
            });
       })->get();

- has(relationName)
- whereRelation
- whereDoesntHave

- doesntHave
    Practice: Lấy ra tất cả các danh mục ko có câu hỏi

- with




