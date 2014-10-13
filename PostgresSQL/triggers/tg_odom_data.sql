-- Function: testo()

-- DROP FUNCTION testo();

CREATE OR REPLACE FUNCTION testo()
  RETURNS trigger AS
$BODY$
declare
msg character(500);
avt character(50);
BEGIN


IF(TG_OP='INSERT') THEN
	new.data_ins=now();
	new.data_upd=now();
	msg='Вставка нового значения в таблицу '||TG_TABLE_NAME||new;
	avt='Триггер '||TG_NAME||' INSERT';
	insert into log (date,text,author) values (now(),msg,avt);
	RETURN new;
ELSIF (TG_OP = 'UPDATE') THEN
	new.data_upd=now();
	msg='Редактирование записи в таблице '||TG_TABLE_NAME||'Старые значения: '||old||'Новые значения: '||new;
	avt='Триггер '||TG_NAME||' UPDATE';
	insert into log (date,text,author) values (now(),msg,avt);
	RETURN new;
END IF;
return null;
END;
    $BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;
ALTER FUNCTION testo()
  OWNER TO testuser;
