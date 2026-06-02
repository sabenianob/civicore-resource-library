# ADR-002: URL Strategy

## Status

Accepted

## Context

The CiviCore Resource and Template Library needs a public URL that supports search visibility, brand clarity, and long-term growth.

Two primary URL patterns are under consideration:

- https://resources.civicoreit.com
- https://civicoreit.com/resources

The URL choice should reflect whether the library will become a dedicated public resource platform or remain a smaller section of the main CiviCore website.

## Decision

Use:

```text
https://resources.civicoreit.com
```

Rationale:

- The resource library should become a dedicated public resource platform.
- A subdomain keeps it separate from the main CiviCore company site and SheetBot.
- It allows independent deployment, analytics, SEO tracking, and future scaling.
- It supports the long-term identity of the library as a standalone CiviCore public asset.

## Consequences

Using a subdomain gives the resource library a distinct identity and clearer room to grow into a dedicated public platform.

The project will require DNS setup for resources.civicoreit.com.

The project will require separate SSL configuration.

SEO authority will initially build separately from the main domain path.

The subdomain should be easier to manage as an independent platform with its own deployment, analytics, SEO tracking, sitemap planning, and future scaling decisions.

## Alternatives Considered

### https://resources.civicoreit.com

Best fit if the library will become a dedicated public resource platform with many pages, future tools, premium packs, and independent SEO growth.

Requires subdomain DNS, SSL, deployment, analytics, and Search Console setup.

### https://civicoreit.com/resources

Best fit if the library will initially remain a smaller section of the main CiviCore website.

Simpler brand continuity and navigation, but potentially less flexible if the resource library becomes a larger platform.
