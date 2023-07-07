# Context Indicator

This lightweight extension makes the application context more prominent in the backend.

## Introduction

When using a TYPO3 CMS project in different environments, it's sometimes hard to keep track of in which environment's backend one is currently editing data.

This extension adds a thin, colored border to the topbar and the current application context to the site name.

The color depends on the application context, so that you always know in which environment you're working in.

### Development

The default border color for development environments is `var(--bs-success)` (green).

![Development environment indicated by a green border!](/Documentation/Images/Environment/Development.jpg "Development environment indicated by a green border")

### Testing

The default border color for testing environments is `var(--bs-info)` (blue).

![Testing environment indicated by a blue border!](/Documentation/Images/Environment/Testing.jpg "Testing environment indicated by a blue border")

### Production

The default border color for production environments is `var(--bs-danger)` (red).

![Production environment indicated by a red border!](/Documentation/Images/Environment/Production.jpg "Production environment indicated by a red border")

## Configuration

Since the environment has a system wide scope, configuration is done using `ext_conf_template.txt`.<br>
Therefore, all options can be modified programmatically or managed in the backend using TYPO3's Settings module.

### Basic

Configure the behaviour of the site name's modification and disable the indication for production environments.

![Basic configuration options!](/Documentation/Images/Configuration/Basic.jpg "Basic configuration options")

### Color

Configure the colors for the environments. Any valid CSS color value works.

![Color configuration options!](/Documentation/Images/Configuration/Color.jpg "Color configuration options")

## Support

**cybob communication GmbH**

Große Hamkenstraße 30<br>
49074 Osnabrück<br>
Germany

Mail: info@cybob.com<br>
Phone: +49 541 911 89 0<br>
Website: https://www.cybob.com/
