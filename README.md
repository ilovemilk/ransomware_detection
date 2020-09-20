# Nextcloud Ransomware Recovery
[![Build Status](https://travis-ci.com/undo-ransomware/ransomware_detection.svg?branch=master)](https://travis-ci.com/undo-ransomware/ransomware_detection)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/undo-ransomware/ransomware_detection/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/undo-ransomware/ransomware_detection/?branch=master)
[![codecov](https://codecov.io/gh/undo-ransomware/ransomware_detection/branch/master/graph/badge.svg)](https://codecov.io/gh/undo-ransomware/ransomware_detection)

**Ransomware detection with a guided user-controlled one-step recovery.**

![](screenshots/ransomware-recovery-0.9.0-4.png)

This app monitors file operations during the synchronization to detect ransomware attacks and also offers a post infection file storage scanner, which works even if it happend that you didn't have this app installed during an attack. This is done by using generic indicators for a guided user-controlled one-step recovery utilizing the integrated file versioning methods.

## Features

* :exclamation:**Ransomware Detection:** Monitoring the file operations, analysing and classifying the collected data by using generic indicators allows a reliable detection.
* :computer:**Recovery Interface:**  The color coded results of the classification offer an easy-to-use recovery interface giving the user full control of the recovery process.
* :relaxed:**Guided Undo:** The guided user-controlled one-step recovery allows the user to quick and savely restore all - by ransomware - encrypted files without being affected by any false positives.

## Installation

In your Nextcloud, simply navigate to »Apps«, choose the category »Security«, find the Ransomware recovery app and enable it.
Then open the Ransomware recovery app from the app menu.

# Acknowledgements

This project was created for the
[Undo Ransomware](https://prototypefund.de/project/undo-von-ransomware-mittels-machine-learning/)
Prototype Fund project.

[![Sponsored by the Federal Ministry of Education and Research](img/bmbf.png)](https://www.bmbf.de/)
[![A Prototype Fund Project](img/ptf.png)](https://prototypefund.de/)
[![Prototype Fund is an Open Knowledge Foundation Project](img/okfn.png)](https://okfn.de/)
