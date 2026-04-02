CREATE TABLE IF NOT EXISTS assets (
    id BIGINT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,

    asset_type_id BIGINT NOT NULL REFERENCES asset_types(id) ON DELETE RESTRICT,
    location_id BIGINT REFERENCES locations(id) ON DELETE RESTRICT,
    assigned_user_id BIGINT REFERENCES users(id) ON DELETE SET NULL,
    serial_number TEXT UNIQUE,
    asset_tag TEXT UNIQUE,
    brand TEXT,
    model TEXT,
    status TEXT NOT NULL DEFAULT 'disponivel' 
        CHECK (status IN ('disponivel', 'em_uso', 'manutencao', 'retirado', 'perdido')),

    purchase_date DATE,
    notes TEXT,
    created_at TIMESTAMPTZ NOT NULL DEFAULT CURRENT_TIMESTAMP,
    modified_at TIMESTAMPTZ NOT NULL DEFAULT CURRENT_TIMESTAMP
);


CREATE TRIGGER tr_assets_update_modified
BEFORE UPDATE ON assets
FOR EACH ROW
EXECUTE FUNCTION update_modified_column();