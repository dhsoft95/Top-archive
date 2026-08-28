<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'             => $this->id,
            'title'          => $this->title,
            'slug'           => $this->slug,
            'excerpt'        => $this->excerpt,
            'content'        => $this->content,
            'featured_image' => $this->featured_image
                ? asset('storage/' . $this->featured_image)
                : null,
            'gallery'        => $this->buildGalleryUrls(),
            'category'       => new CategoryResource($this->whenLoaded('category')),
            'tags'           => TagResource::collection($this->whenLoaded('tags')),
            'author'         => $this->when(
                $this->relationLoaded('author') && $this->author,
                fn () => ['name' => $this->author->name]
            ),
            'published_at'   => $this->published_at?->toIso8601String(),
            'read_time'      => $this->read_time,
            'country'        => $this->country,
        ];
    }

    private function buildGalleryUrls(): array
    {
        if (empty($this->gallery)) {
            return [];
        }

        return collect($this->gallery)
            ->map(fn (string $path) => asset('storage/' . $path))
            ->values()
            ->all();
    }
}
