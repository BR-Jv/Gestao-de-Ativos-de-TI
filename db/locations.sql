create table locations (
	id BIGINT generated always as IDENTITY PRIMARY KEY, 
	name TEXT not null unique,
	description TEXT,
	created_at TIMESTAMPTZ NOT NULL DEFAULT CURRENT_TIMESTAMP,
    modified_at TIMESTAMPTZ NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TRIGGER tr_locations_update_modified
BEFORE UPDATE ON locations
FOR EACH ROW
EXECUTE FUNCTION update_modified_column();

insert into locations (name) values 
('Administração'),
('Financeiro'),
('Contabilidade'),
('Recursos Humanos'),
('Compras'),
('Logística'),
('Comercial'),
('Vendas'),
('Marketing'),
('Atendimento ao Cliente'),
('Operações'),
('Produção'),
('Engenharia'),
('Qualidade'),
('Jurídico'),
('Diretoria'),
('Presidência');