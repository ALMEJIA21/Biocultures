<?php
class Microorganismo {
    private string $nombre;
    private string $tipo;

    public function __construct(string $nombre, string $tipo) {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
    }

    public function getNombre(): string { return $this->nombre; }
    public function getTipo(): string { return $this->tipo; }
}

class MedioCultivo {
    private string $nombre;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre(): string { return $this->nombre; }
}

class EvaluadorCrecimiento {
    public static function clasificar(int $temperatura, int $horas): string {
        if ($temperatura < 15 || $horas < 12) {
            return "Sin crecimiento";
        } elseif ($temperatura >= 15 && $temperatura <= 25 && $horas <= 24) {
            return "Bajo";
        } elseif ($temperatura > 25 && $temperatura <= 35 && $horas <= 48) {
            return "Medio";
        } else {
            return "Alto";
        }
    }
}

class Ensayo {
    private string $id;
    private Microorganismo $microorganismo;
    private MedioCultivo $medio;
    private int $temperatura;
    private int $horas;
    private string $resultado;

    public function __construct(string $id, Microorganismo $micro, MedioCultivo $medio, int $temp, int $horas) {
        $this->id = $id;
        $this->microorganismo = $micro;
        $this->medio = $medio;
        $this->temperatura = $temp;
        $this->horas = $horas;
        $this->resultado = EvaluadorCrecimiento::clasificar($temp, $horas);
    }

    public function getId(): string { return $this->id; }
    public function getMicroorganismo(): Microorganismo { return $this->microorganismo; }
    public function getMedio(): MedioCultivo { return $this->medio; }
    public function getTemperatura(): int { return $this->temperatura; }
    public function getHoras(): int { return $this->horas; }
    public function getResultado(): string { return $this->resultado; }
}