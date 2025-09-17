<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IncidentReport extends Model
{
    /**
     * Obtener el tipo de institución propietaria del reporte de incidente
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function entityType(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(EntityType::class);
    }

    /**
     * Obtener la infraestructura afectada del reporte de incidente
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function affectedInfrastructure(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(AffectedInfrastructure::class);
    }

    /**
     * Obtener los servicios afectados del reporte de incidente
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function affectedService(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(AffectedService::class);
    }
}
