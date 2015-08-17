
mysql -usummer -pcamp ci < data/base_structure.sql
mysql -usummer -pcamp ci < data/base_data.sql

composer install -n