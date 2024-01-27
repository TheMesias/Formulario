<div class="mb-3 p-3 border border-dark rounded contenedor_pregunta">
    <label class="form-label">Pregunta {{ $questionNumber }}:</label>
    <label class="form-label" for="">{{ $questionText }}</label>
    <div class="d-flex">
        <div class="m-3 container_input">
            <input class="form-check-input" type="radio" name="{{ $name }}" id="t_desacuerdo{{ $questionNumber }}" value="1">
            <label class="form-check-label" for="t_desacuerdo{{ $questionNumber }}">
                Totalmente en desacuerdo
            </label>
        </div>
        <div class="m-3 container_input">
            <input class="form-check-input" type="radio" name="{{ $name }}" id="desacuerdo{{ $questionNumber }}" value="2">
            <label class="form-check-label" for="desacuerdo{{ $questionNumber }}">
                En desacuerdo
            </label>
        </div>
        <div class="m-3 container_input">
            <input class="form-check-input" type="radio" name="{{ $name }}" id="d_decidir{{ $questionNumber }}" value="3">
            <label class="form-check-label" for="d_decidir{{ $questionNumber }}">
                Es dificl decidir
            </label>
        </div>
        <div class="m-3 container_input">
            <input class="form-check-input" type="radio" name="{{ $name }}" id="acuerdo{{ $questionNumber }}" value="4">
            <label class="form-check-label" for="acuerdo{{ $questionNumber }}">
                De acuerdo
            </label>
        </div>
        <div class="m-3">
            <input class="form-check-input" type="radio" name="{{ $name }}" id="t_acuerdo{{ $questionNumber }}" value="5">
            <label class="form-check-label" for="t_acuerdo{{ $questionNumber }}">
                Totalmente de acuerdo
            </label>
        </div>
        @error($name)
            <div class="alert alert-danger">Falta llenar</div>
        @enderror
    </div>
</div>