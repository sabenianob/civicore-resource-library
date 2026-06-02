# WordPress Content Import Checklist

## 1. Purpose

Prepare a clear process for converting the repository markdown content into WordPress draft pages and posts.

This checklist is planning-only until WordPress staging is installed and approved for content import. It does not install WordPress, change server configuration, publish content, or modify any live site.

## 2. Content Source Locations

Resource posts:

```text
/content/drafts
```

Required pages:

```text
/content/pages
```

## 3. WordPress Content Type Mapping

Resource drafts should become WordPress Posts.

Required pages should become WordPress Pages.

Use Posts for scalable resource publishing because posts support categories, tags, archives, feeds, and SEO workflows.

Use Pages for fixed site content such as the homepage, About, Contact, Disclaimer, and Privacy Policy.

## 4. Required WordPress Pages Mapping

| Source File | WordPress Page |
| --- | --- |
| content/pages/homepage.md | Homepage |
| content/pages/about-civicore-resources.md | About CiviCore Resources |
| content/pages/contact.md | Contact |
| content/pages/disclaimer.md | Disclaimer |
| content/pages/privacy-policy.md | Privacy Policy |

## 5. Resource Post Mapping

| Source File | Recommended WordPress Category |
| --- | --- |
| lgu-request-letter-template.md | LGU Letters |
| barangay-project-proposal-template.md | Project Proposal Templates |
| permit-to-enter-private-property-template.md | Right-of-Way and Permit-to-Enter |
| right-of-way-agreement-template.md | Right-of-Way and Permit-to-Enter |
| water-system-project-proposal-template.md | Project Proposal Templates |
| street-lighting-project-proposal-template.md | Project Proposal Templates |
| water-district-website-modernization-checklist.md | Water District Resources |
| office-digitalization-starter-guide.md | Office Digitalization Guides |
| google-workspace-folder-structure-small-offices.md | Office Digitalization Guides |
| basic-project-cost-estimate-template.md | Calculators and Tools |

## 6. Import Checklist for Each Post

For each markdown resource draft:

- [ ] Copy title.
- [ ] Copy body.
- [ ] Set slug.
- [ ] Assign category.
- [ ] Add tags.
- [ ] Add meta title.
- [ ] Add meta description.
- [ ] Confirm disclaimer.
- [ ] Add related resource links.
- [ ] Preview.
- [ ] Save as draft.

Post import notes:

- Keep all imported resource posts as drafts first.
- Confirm legal-adjacent templates keep stronger disclaimer language.
- Confirm cost, budget, procurement, technical, and compliance-related resources keep appropriate caution language.
- Do not publish directly during import.

## 7. Import Checklist for Each Page

For each required page draft:

- [ ] Copy page title.
- [ ] Copy body.
- [ ] Set slug.
- [ ] Confirm navigation placement.
- [ ] Preview.
- [ ] Save as draft.

Page import notes:

- Homepage should be configured according to the selected WordPress homepage behavior.
- Privacy Policy should remain a draft until actual analytics, forms, cookies, lead capture, or third-party services are confirmed and reviewed.
- Disclaimer should be reviewed before resource posts are published.

## 8. Post-Import Validation

After importing the markdown content into WordPress staging, confirm:

- [ ] All 10 resource posts exist as drafts.
- [ ] All required pages exist as drafts.
- [ ] Categories created.
- [ ] Tags created conservatively.
- [ ] Slugs match planned URLs.
- [ ] No staging content is indexed.
- [ ] No SheetBot operational details exposed.

Validation notes:

- Review desktop and mobile previews.
- Check that template blocks, tables, and placeholders remain readable.
- Confirm related links only point to existing or planned resources.
- Confirm no private server, DNS, database, credential, or internal planning details appear in public-facing content.

## 9. Publishing Order

Recommended publishing order:

1. Disclaimer
2. Privacy Policy
3. About
4. Contact
5. Homepage
6. Resource posts

Publishing notes:

- Legal-adjacent resources should receive extra review before publication.
- Privacy Policy should be finalized before forms, analytics, cookies, or lead capture are enabled.
- Resource posts should remain drafts until staging review is complete.

## 10. Notes

- Keep all imported content as drafts first.
- Publish only after staging review.
- Do not activate lead capture until Privacy Policy is reviewed.
- Do not activate SheetBot links yet.
- Do not install additional plugins solely for import unless approved.
- Do not expose staging content to search engines.
