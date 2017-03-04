TYPE=VIEW
query=select `databasecl4`.`employee`.`comm` AS `comm` from `databasecl4`.`employee` where (`databasecl4`.`employee`.`comm` = 0)
md5=95825316a90df7afe53e936d47ec608b
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2016-06-18 11:08:16
create-version=2
source=SELECT comm\nFROM `employee`\nWHERE comm = 0
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `databasecl4`.`employee`.`comm` AS `comm` from `databasecl4`.`employee` where (`databasecl4`.`employee`.`comm` = 0)
mariadb-version=100113
