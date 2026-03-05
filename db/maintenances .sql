CREATE TABLE IF NOT EXISTS maintenances (
    id BIGINT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
    asset_id BIGINT NOT NULL REFERENCES assets(id) ON DELETE RESTRICT,
    description TEXT NOT NULL,
    maintenance_type TEXT NOT NULL, -- Ex: 'preventiva', 'corretiva', 'upgrade'
    status TEXT NOT NULL DEFAULT 'open' CHECK (status IN ('open', 'close')),
    opened_at TIMESTAMPTZ NOT NULL DEFAULT CURRENT_TIMESTAMP,
    closed_at TIMESTAMPTZ,
    created_by BIGINT NOT NULL REFERENCES users(id) ON DELETE RESTRICT,
    created_at TIMESTAMPTZ NOT NULL DEFAULT CURRENT_TIMESTAMP,
    modified_at TIMESTAMPTZ NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TRIGGER tr_maintenances_update_modified
BEFORE UPDATE ON maintenances
FOR EACH ROW
EXECUTE FUNCTION update_modified_column();