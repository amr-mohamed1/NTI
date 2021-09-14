<?php

/*

admin table
id      name        email       password
1       kareem      k@e.com       123
9       mohamed     u@e.com       123
5       khaled      p@e.com       123

patient table
id      name        email       password        accepted_by
1       jack        z@e.com       123               1
2       ziad        o@e.com       123               5   
3       nour        n@e.com       123               9

doctor table
id      name        email       password        gender      specialize      add_by(admin_id)
1       amr         a@a.com       123            male           eyes                1
2       ahmed       b@a.com       123            male           eyes                5
3       ali         c@a.com       123            male           eyes                9

times table
id      time        doctor_id   
1       2pm             1
2       8am             9
3       9pm             5

pocket table
id      patient_id      doctor_id       time_id        accept_state(if doctor accept the pocket it will store *1*)
1           1               1              3               0
2           2               2              2               1   
3           3               3              3               1

****** RELATIONS
admin           doctor
  1       =       m

admin           patient
  1       =       m

patient         pocket
  1       =       m

doctor          pocket
  1              m
  m              1
=======================
  m              m

doctor          times
  1              m
  m              1
=======================
  m              m



*/