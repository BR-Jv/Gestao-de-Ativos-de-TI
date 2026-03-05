create table asset_types (
	id BIGINT generated always as IDENTITY PRIMARY KEY, 
	name TEXT not null unique
	created_at TIMESTAMPTZ NOT NULL DEFAULT CURRENT_TIMESTAMP,
    modified_at TIMESTAMPTZ NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TRIGGER tr_asset_types_update_modified
BEFORE UPDATE ON asset_types
FOR EACH ROW
EXECUTE FUNCTION update_modified_column();

insert into asset_types (name) values 
('Desktop'),
('Notebooks'),
('Servidores'),
('Monitores'),
('Teclados'),
('Mouses'),
('Nobreaks'),
('Estabilizadores'),
('Fontes de Energia'),
('Extensões Elétricas'),
('Filtros de Linha'),
('Cabos de Energia'),
('Cabos de Rede'),
('Cabos HDMI'),
('Cabos DisplayPort'),
('Cabos VGA'),
('Switches'),
('Roteadores'),
('Access Points'),
('Firewalls'),
('Racks'),
('Patch Panels'),
('Storages'),
('HDs'),
('SSDs'),
('Pendrives'),
('Impressoras'),
('Scanners'),
('Webcams'),
('Headsets'),
('Telefones IP'),
('Placas de Rede'),
('Placas de Vídeo'),
('Memórias RAM'),
('Processadores'),
('Leitores de Código de Barras'),
('Projetores'),
('Tablets'),
('Smartphones Corporativos'),
('Licenças de Software'),
('Periféricos Diversos');