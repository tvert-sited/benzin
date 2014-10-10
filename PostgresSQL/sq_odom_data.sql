-- Sequence: sq_odom_data

-- DROP SEQUENCE sq_odom_data;

CREATE SEQUENCE sq_odom_data
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE sq_odom_data
  OWNER TO testuser;
