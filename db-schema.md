[https://dbdiagram.io/d/5ccefc8bf7c5bb70c72fdf51]: 

```
Table buildings {
  id int [pk]
  building_name varchar(20)
  total_floors int
  total_rooms int
  total_rooms_per_floor int
}

Table rooms{
  id int [pk]
  room_name varchar(10)
  total_students int
  building_id int [ref: > buildings.id]
}

Table faculties{
  id int [pk]
  faculty_name varchar
}

Table departments{
  id int [pk]
  department_name varchar(50)
  faculty_id int [ref: > faculties.id]
}

Table professors{
  id int [pk]
  professor varchar(100)
}

Table subjects{
  id int [pk]
  subject varchar(100)
}

Table days{
  id int [pk]
  days varchar(15)
}

Table times{
  id int [pk]
  times time
}

Table prof_dept{
  id int [pk]
  professor_id int [ref: > professors.id]
  department_id int [ref: > departments.id]
}

Table classes{
  id int [pk]
  total_students int
  subject_id int [ref: > subjects.id]
  prof_dept_id int [ref: > prof_dept.id]
  day_id int [ref: > days.id]
  start_time int [ref: > times.id]
  end_time int [ref: > times.id]
}

Table assigned_rooms{
  id int [pk]
  room_id int [ref: > rooms.id]
  class_id int [ref: > classes.id]
  day_id int [ref: > days.id]
  start_time int [ref: > times.id]
  end_time int [ref: > times.id]
}
```

