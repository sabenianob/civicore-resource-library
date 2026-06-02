# ADR-002: URL Strategy

## Status

Proposed

## Context

The CiviCore Resource and Template Library needs a public URL that supports search visibility, brand clarity, and long-term growth.

Two primary URL patterns are under consideration:

- https://resources.civicoreit.com
- https://civicoreit.com/resources

The URL choice should reflect whether the library will become a dedicated public resource platform or remain a smaller section of the main CiviCore website.

## Decision

The initial recommended direction is to use https://resources.civicoreit.com if the project will become a dedicated public resource platform.

No final URL decision is accepted yet. This ADR records the proposed direction for review.

## Consequences

Using a subdomain gives the resource library a distinct identity and clearer room to grow into a dedicated public platform.

A dedicated subdomain may require separate hosting, DNS, SSL, analytics, Search Console setup, deployment configuration, sitemap planning, and brand navigation decisions.

Using a path under the main domain may be simpler at first and may benefit from the main website's existing domain context, but it can make the resource library feel less independent if it grows substantially.

## Alternatives Considered

### https://resources.civicoreit.com

Best fit if the library will become a dedicated public resource platform with many pages, future tools, premium packs, and independent SEO growth.

Requires subdomain DNS, SSL, deployment, analytics, and Search Console setup.

### https://civicoreit.com/resources

Best fit if the library will initially remain a smaller section of the main CiviCore website.

Simpler brand continuity and navigation, but potentially less flexible if the resource library becomes a larger platform.
