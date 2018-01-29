# Dhii - Key/Value Aware Interface
[![Build Status](https://travis-ci.org/Dhii/data-key-value-aware-interface.svg?branch=master)](https://travis-ci.org/Dhii/data-key-value-aware-interface)
[![Code Climate](https://codeclimate.com/github/Dhii/data-key-value-aware-interface/badges/gpa.svg)](https://codeclimate.com/github/Dhii/data-key-value-aware-interface)
[![Test Coverage](https://codeclimate.com/github/Dhii/data-key-value-aware-interface/badges/coverage.svg)](https://codeclimate.com/github/Dhii/data-key-value-aware-interface/coverage)
[![Latest Stable Version](https://poser.pugx.org/dhii/data-key-value-aware-interface/version)](https://packagist.org/packages/dhii/data-key-value-aware-interface)
[![Latest Unstable Version](https://poser.pugx.org/dhii/data-key-value-aware-interface/v/unstable)](https://packagist.org/packages/dhii/data-key-value-aware-interface)
[![This package complies with Dhii standards](https://img.shields.io/badge/Dhii-Compliant-green.svg?style=flat-square)][Dhii]

Increase interoperability of value objects by depending on this package.

[Dhii]: https://github.com/Dhii/dhii

## Interfaces
- [`KeyAwareInterface`] - Exposes a key, which can be a string, [Stringable][`StringableInterface`], or `null`.
- [`ValueAwareInterface`] - Exposes a value, which can be of any type.
- [`KeyValueAwareInterface`] - Something that exposes both a key and a value.

[`KeyAwareInterface`]:                  src/KeyAwareInterface.php
[`ValueAwareInterface`]:                src/ValueAwareInterface.php
[`KeyValueAwareInterface`]:             src/KeyValueAwareInterface.php

[`StringableInterface`]:                https://github.com/Dhii/stringable-interface/blob/develop/src/StringableInterface.php
