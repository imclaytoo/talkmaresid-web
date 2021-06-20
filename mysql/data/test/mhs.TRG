TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` trigger trig_update_mhs\nafter update on mhs\nfor each row\nbegin\ninsert into history_alamat_mhs values (now(), OLD.nim,OLD.alamat,USER());\nend'
sql_modes=1098907648
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_general_ci'
db_cl_names='latin1_swedish_ci'
created=162320234516
