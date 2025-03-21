@extends("layouts.main")

@section("content")
    <div class="container py-3">
      <h2>Edit project</h2>
      <form action="{{ route("projects.update", ["project" => $project->id]) }}" method="post">
        @csrf
        @method("put")
        
        <div class="mb-3">
          <label class="form-label" for="name">Project name</label>
          <input name="name" type="text" class="form-control @error("name") is-invalid @enderror" id="name" placeholder=""
            value="{{ old("name", $project) }}"
          >
          @error("name")
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label class="form-label" for="description">Description</label>
          <textarea name="description" class="form-control @error("description") is-invalid @enderror" id="description" rows="3">{{ old("description", $project) }}</textarea>
          @error("description")
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label class="form-label" for="image_url">Background image URL</label>
          <input name="image_url" type="text" class="form-control @error("image_url") is-invalid @enderror" id="image_url" placeholder=""
            value="{{ old("image_url", $project) }}"
          >
          @error("image_url")
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Update project</button>
        </div>

      </form>
    </div>
@endsection