<?hh // strict
namespace google\protobuf;

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// Source: wrappers.proto

class DoubleValue implements \Protobuf\Message {
  public float $value;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'value' => float,
  ) $s = shape()) {
    $this->value = $s['value'] ?? 0.0;
    $this->XXX_unrecognized = '';
  }

  public function MessageName(): string {
    return "google.protobuf.DoubleValue";
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->value = $d->readDouble();
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    $e->writeTag(1, 1);
    $e->writeDouble($this->value);
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->setCustomEncoding($this->value);
  }

  public function MergeJsonFrom(mixed $m): void {
    $this->value = \Protobuf\Internal\JsonDecoder::readFloat($m);
  }

  public function CopyFrom(\Protobuf\Message $o): \Result\Error {
    if (!($o is DoubleValue)) {
      return \Result\Errorf('CopyFrom failed: incorrect type received: %s', $o->MessageName());
    }
    $this->value = $o->value;
    $this->XXX_unrecognized = $o->XXX_unrecognized;
    return \Result\Ok();
  }
}

class FloatValue implements \Protobuf\Message {
  public float $value;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'value' => float,
  ) $s = shape()) {
    $this->value = $s['value'] ?? 0.0;
    $this->XXX_unrecognized = '';
  }

  public function MessageName(): string {
    return "google.protobuf.FloatValue";
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->value = $d->readFloat();
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    $e->writeTag(1, 5);
    $e->writeFloat($this->value);
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->setCustomEncoding($this->value);
  }

  public function MergeJsonFrom(mixed $m): void {
    $this->value = \Protobuf\Internal\JsonDecoder::readFloat($m);
  }

  public function CopyFrom(\Protobuf\Message $o): \Result\Error {
    if (!($o is FloatValue)) {
      return \Result\Errorf('CopyFrom failed: incorrect type received: %s', $o->MessageName());
    }
    $this->value = $o->value;
    $this->XXX_unrecognized = $o->XXX_unrecognized;
    return \Result\Ok();
  }
}

class Int64Value implements \Protobuf\Message {
  public int $value;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'value' => int,
  ) $s = shape()) {
    $this->value = $s['value'] ?? 0;
    $this->XXX_unrecognized = '';
  }

  public function MessageName(): string {
    return "google.protobuf.Int64Value";
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->value = $d->readVarint();
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    $e->writeTag(1, 0);
    $e->writeVarint($this->value);
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->setCustomEncoding(\sprintf('%d', $this->value));
  }

  public function MergeJsonFrom(mixed $m): void {
    $this->value = \Protobuf\Internal\JsonDecoder::readInt64Signed($m);
  }

  public function CopyFrom(\Protobuf\Message $o): \Result\Error {
    if (!($o is Int64Value)) {
      return \Result\Errorf('CopyFrom failed: incorrect type received: %s', $o->MessageName());
    }
    $this->value = $o->value;
    $this->XXX_unrecognized = $o->XXX_unrecognized;
    return \Result\Ok();
  }
}

class UInt64Value implements \Protobuf\Message {
  public int $value;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'value' => int,
  ) $s = shape()) {
    $this->value = $s['value'] ?? 0;
    $this->XXX_unrecognized = '';
  }

  public function MessageName(): string {
    return "google.protobuf.UInt64Value";
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->value = $d->readVarint();
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    $e->writeTag(1, 0);
    $e->writeVarint($this->value);
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->setCustomEncoding(\sprintf('%u', $this->value));
  }

  public function MergeJsonFrom(mixed $m): void {
    $this->value = \Protobuf\Internal\JsonDecoder::readInt64Unsigned($m);
  }

  public function CopyFrom(\Protobuf\Message $o): \Result\Error {
    if (!($o is UInt64Value)) {
      return \Result\Errorf('CopyFrom failed: incorrect type received: %s', $o->MessageName());
    }
    $this->value = $o->value;
    $this->XXX_unrecognized = $o->XXX_unrecognized;
    return \Result\Ok();
  }
}

class Int32Value implements \Protobuf\Message {
  public int $value;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'value' => int,
  ) $s = shape()) {
    $this->value = $s['value'] ?? 0;
    $this->XXX_unrecognized = '';
  }

  public function MessageName(): string {
    return "google.protobuf.Int32Value";
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->value = $d->readVarint32Signed();
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    $e->writeTag(1, 0);
    $e->writeVarint($this->value);
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->setCustomEncoding($this->value);
  }

  public function MergeJsonFrom(mixed $m): void {
    $this->value = \Protobuf\Internal\JsonDecoder::readInt32Signed($m);
  }

  public function CopyFrom(\Protobuf\Message $o): \Result\Error {
    if (!($o is Int32Value)) {
      return \Result\Errorf('CopyFrom failed: incorrect type received: %s', $o->MessageName());
    }
    $this->value = $o->value;
    $this->XXX_unrecognized = $o->XXX_unrecognized;
    return \Result\Ok();
  }
}

class UInt32Value implements \Protobuf\Message {
  public int $value;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'value' => int,
  ) $s = shape()) {
    $this->value = $s['value'] ?? 0;
    $this->XXX_unrecognized = '';
  }

  public function MessageName(): string {
    return "google.protobuf.UInt32Value";
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->value = $d->readVarint32();
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    $e->writeTag(1, 0);
    $e->writeVarint($this->value);
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->setCustomEncoding($this->value);
  }

  public function MergeJsonFrom(mixed $m): void {
    $this->value = \Protobuf\Internal\JsonDecoder::readInt32Unsigned($m);
  }

  public function CopyFrom(\Protobuf\Message $o): \Result\Error {
    if (!($o is UInt32Value)) {
      return \Result\Errorf('CopyFrom failed: incorrect type received: %s', $o->MessageName());
    }
    $this->value = $o->value;
    $this->XXX_unrecognized = $o->XXX_unrecognized;
    return \Result\Ok();
  }
}

class BoolValue implements \Protobuf\Message {
  public bool $value;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'value' => bool,
  ) $s = shape()) {
    $this->value = $s['value'] ?? false;
    $this->XXX_unrecognized = '';
  }

  public function MessageName(): string {
    return "google.protobuf.BoolValue";
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->value = $d->readBool();
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    $e->writeTag(1, 0);
    $e->writeBool($this->value);
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->setCustomEncoding($this->value);
  }

  public function MergeJsonFrom(mixed $m): void {
    $this->value = \Protobuf\Internal\JsonDecoder::readBool($m);
  }

  public function CopyFrom(\Protobuf\Message $o): \Result\Error {
    if (!($o is BoolValue)) {
      return \Result\Errorf('CopyFrom failed: incorrect type received: %s', $o->MessageName());
    }
    $this->value = $o->value;
    $this->XXX_unrecognized = $o->XXX_unrecognized;
    return \Result\Ok();
  }
}

class StringValue implements \Protobuf\Message {
  public string $value;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'value' => string,
  ) $s = shape()) {
    $this->value = $s['value'] ?? '';
    $this->XXX_unrecognized = '';
  }

  public function MessageName(): string {
    return "google.protobuf.StringValue";
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->value = $d->readString();
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    $e->writeTag(1, 2);
    $e->writeString($this->value);
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->setCustomEncoding($this->value);
  }

  public function MergeJsonFrom(mixed $m): void {
    $this->value = \Protobuf\Internal\JsonDecoder::readString($m);
  }

  public function CopyFrom(\Protobuf\Message $o): \Result\Error {
    if (!($o is StringValue)) {
      return \Result\Errorf('CopyFrom failed: incorrect type received: %s', $o->MessageName());
    }
    $this->value = $o->value;
    $this->XXX_unrecognized = $o->XXX_unrecognized;
    return \Result\Ok();
  }
}

class BytesValue implements \Protobuf\Message {
  public string $value;
  private string $XXX_unrecognized;

  public function __construct(shape(
    ?'value' => string,
  ) $s = shape()) {
    $this->value = $s['value'] ?? '';
    $this->XXX_unrecognized = '';
  }

  public function MessageName(): string {
    return "google.protobuf.BytesValue";
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->value = $d->readString();
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_unrecognized = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    $e->writeTag(1, 2);
    $e->writeString($this->value);
    $e->writeRaw($this->XXX_unrecognized);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->setCustomEncoding(\Protobuf\Internal\JsonEncoder::encodeBytes($this->value));
  }

  public function MergeJsonFrom(mixed $m): void {
    $this->value = \Protobuf\Internal\JsonDecoder::readBytes($m);
  }

  public function CopyFrom(\Protobuf\Message $o): \Result\Error {
    if (!($o is BytesValue)) {
      return \Result\Errorf('CopyFrom failed: incorrect type received: %s', $o->MessageName());
    }
    $this->value = $o->value;
    $this->XXX_unrecognized = $o->XXX_unrecognized;
    return \Result\Ok();
  }
}


class XXX_FileDescriptor_wrappers__proto implements \Protobuf\Internal\FileDescriptor {
  const string NAME = 'wrappers.proto';
  const string RAW =
  'eNri4isvSiwoSC0q1isoyi/JF+JPz89Pz0mF8JJK05SUubhd8kuTclLDEnNKU4VEuFjLQA'
  .'wJRgVGDcYgCEdJiYvLLSc/sQSLGiYkNZ55JWYmWNQww9Qoc3GH4lLEgmqQsREWNaxoBmFV'
  .'xAtTpMjF6ZSfn4NFCQeSOcElRZl56VgUcSI5yKmyJLUYixoeqBqnGi7h5PxcPbTQdeINhw'
  .'Z/AEgkgDFKKz2zJKM0SS85P1c/PT8nMS9dH6ZYv6CksiC1WB8WYz8YGRcxMbsHOK1iknOH'
  .'mBsAVaoXnpqT452XX54XAtKSxAY2wxgQAAD//zHDkpA';
  public function Name(): string {
    return self::NAME;
  }

  public function FileDescriptorProtoBytes(): string {
    return (string)\gzuncompress(\base64_decode(self::RAW));
  }
}
