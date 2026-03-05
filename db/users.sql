create table users (
	id BIGINT generated always as IDENTITY PRIMARY KEY, 
	name TEXT not null,
	email TEXT NOT NULL UNIQUE CHECK (email ~* '^[A-Za-z0-9._+%-]+@[A-Za-z0-9.-]+[.][A-Za-z]+$'),
	login VARCHAR(11) NOT NULL UNIQUE CHECK (login ~ '^[0-9]{11}$'),
	password TEXT not null, 
	department TEXT,
	role TEXT NOT NULL CHECK (role in ('admin', 'gestor')) default 'gestor', 
	status BOOLEAN NOT NULL DEFAULT true,
	created_at TIMESTAMPTZ NOT NULL DEFAULT CURRENT_TIMESTAMP,
	modified_at TIMESTAMPTZ NOT NULL DEFAULT CURRENT_TIMESTAMP
);


CREATE TRIGGER tr_users_update_modified
BEFORE UPDATE ON users
FOR EACH ROW
EXECUTE FUNCTION update_modified_column();